<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use App\Models\Gejala;
use App\Models\Rule;
use App\Models\HasilDiagnosis;
use Illuminate\Http\Request;

class ScreeningController extends Controller
{
    /**
     * Bobot CF User berdasarkan jawaban
     */
    private $cfUserValues = [
        'tidak' => 0.0,
        'tidak_tahu' => 0.2,
        'sedikit_yakin' => 0.4,
        'cukup_yakin' => 0.6,
        'yakin' => 0.8,
        'sangat_yakin' => 1.0,
    ];

    /**
     * Kategori gejala per step
     */
    private $steps = [
        1 => 'Positif',
        2 => 'Negatif',
        3 => 'Disorganisasi',
        4 => 'Katatonik',
        5 => 'Prodromal',
        6 => 'Umum',
    ];

    /**
     * Tampilkan halaman pengantar screening
     */
    public function index()
    {
        return view('public.screening');
    }

    /**
     * Mulai screening - simpan data pengguna ke session
     */
    public function start(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:120',
            'email' => 'required|email',
            'address' => 'required|string',
            'phone' => 'required|string',
        ]);

        // Store user data in session
        session([
            'screening_user' => [
                'nama' => $validated['name'],
                'umur' => $validated['age'],
                'email' => $validated['email'],
                'alamat' => $validated['address'],
                'telepon' => $validated['phone'],
            ],
            'screening_answers' => [],
        ]);

        return redirect()->route('screening.confirm');
    }

    /**
     * Tampilkan halaman konfirmasi sebelum memulai pertanyaan
     */
    public function confirm()
    {
        // Periksa apakah data pengguna ada
        if (!session()->has('screening_user')) {
            return redirect()->route('screening')->with('error', 'Silakan isi data diri terlebih dahulu');
        }

        return view('public.screening.confirm');
    }

    /**
     * Tampilkan pertanyaan untuk langkah tertentu
     */
    public function questions($step)
    {
        // Validasi langkah
        if (!isset($this->steps[$step])) {
            return redirect()->route('screening.questions', ['step' => 1]);
        }

        // Periksa apakah data pengguna ada
        if (!session()->has('screening_user')) {
            return redirect()->route('screening')->with('error', 'Silakan isi data diri terlebih dahulu');
        }

        $kategori = $this->steps[$step];
        $gejalas = Gejala::where('kategori', $kategori)->orderBy('kode')->get();

        $totalSteps = count($this->steps);
        $currentAnswers = session('screening_answers', []);

        return view('public.screening.questions', compact(
            'step',
            'kategori',
            'gejalas',
            'totalSteps',
            'currentAnswers'
        ));
    }

    /**
     * Simpan jawaban untuk satu langkah
     */
    public function storeAnswers(Request $request)
    {
        $step = $request->input('step');
        $answers = $request->input('answers', []);

        // Gabungkan dengan jawaban yang ada
        $currentAnswers = session('screening_answers', []);
        $currentAnswers = array_merge($currentAnswers, $answers);
        session(['screening_answers' => $currentAnswers]);

        // Tentukan langkah berikutnya
        $nextStep = $step + 1;

        if ($nextStep > count($this->steps)) {
            // Semua langkah selesai, hitung hasil
            return redirect()->route('screening.calculate');
        }

        return redirect()->route('screening.questions', ['step' => $nextStep]);
    }

    /**
     * Hitung diagnosis menggunakan CF + Forward Chaining
     */
    public function calculate()
    {
        $userData = session('screening_user');
        $answers = session('screening_answers', []);

        if (!$userData || empty($answers)) {
            return redirect()->route('screening')->with('error', 'Data tidak lengkap');
        }

        // Ambil semua diagnosis
        $diagnoses = Diagnosis::all();
        $results = [];

        foreach ($diagnoses as $diagnosis) {
            $cfCombined = 0;
            $detailCalculations = [];
            $isFirstRule = true;

            // Ambil aturan untuk diagnosis ini
            $rules = Rule::where('diagnosis_id', $diagnosis->id)
                ->with('gejala')
                ->get();

            foreach ($rules as $rule) {
                $gejalaKode = $rule->gejala->kode;

                // Periksa apakah pengguna menjawab gejala ini
                if (isset($answers[$gejalaKode])) {
                    $cfUser = $this->cfUserValues[$answers[$gejalaKode]] ?? 0;

                    // Forward Chaining: Hanya proses jika CF User > 0
                    if ($cfUser > 0) {
                        $cfPakar = $rule->cf_pakar;

                        // CF Kombinasi = CF Pakar × CF User
                        $cfKombi = $cfPakar * $cfUser;

                        // Simpan detail untuk penjelasan
                        $detailCalculations[] = [
                            'gejala_kode' => $gejalaKode,
                            'gejala_nama' => $rule->gejala->nama,
                            'cf_pakar' => $cfPakar,
                            'cf_user' => $cfUser,
                            'cf_kombinasi' => $cfKombi,
                            'jawaban' => $answers[$gejalaKode],
                        ];

                        // Gabungkan nilai CF menggunakan: CF_gabung = CF_old + CF_new × (1 - CF_old)
                        if ($isFirstRule) {
                            $cfCombined = $cfKombi;
                            $isFirstRule = false;
                        } else {
                            $cfCombined = $cfCombined + ($cfKombi * (1 - $cfCombined));
                        }
                    }
                }
            }

            $results[$diagnosis->kode] = [
                'diagnosis' => $diagnosis,
                'cf_final' => round($cfCombined, 4),
                'cf_percentage' => round($cfCombined * 100, 2),
                'details' => $detailCalculations,
            ];
        }

        // Urutkan berdasarkan nilai CF menurun
        uasort($results, function ($a, $b) {
            return $b['cf_final'] <=> $a['cf_final'];
        });

        // Ambil diagnosis teratas
        $topResult = reset($results);
        $diagnosisUtama = $topResult['diagnosis']->nama ?? 'Tidak Terdeteksi';
        $cfTertinggi = $topResult['cf_final'] ?? 0;

        // Simpan ke database
        $hasilDiagnosis = HasilDiagnosis::create([
            'nama_pasien' => $userData['nama'],
            'umur' => $userData['umur'],
            'email' => $userData['email'],
            'alamat' => $userData['alamat'],
            'telepon' => $userData['telepon'],
            'jawaban' => $answers,
            'hasil' => $results,
            'diagnosis_utama' => $diagnosisUtama,
            'cf_tertinggi' => $cfTertinggi,
        ]);

        // Hapus session
        session()->forget(['screening_user', 'screening_answers']);

        return redirect()->route('screening.result', ['id' => $hasilDiagnosis->id]);
    }

    /**
     * Tampilkan halaman hasil
     */
    public function result($id)
    {
        $hasilDiagnosis = HasilDiagnosis::findOrFail($id);

        return view('public.screening.result', compact('hasilDiagnosis'));
    }

    /**
     * Dapatkan interpretasi berdasarkan nilai CF
     */
    public static function getInterpretation($cfValue)
    {
        if ($cfValue >= 0.8) {
            return ['level' => 'Sangat Tinggi', 'class' => 'danger', 'desc' => 'Sangat disarankan untuk segera berkonsultasi dengan psikiater.'];
        } elseif ($cfValue >= 0.6) {
            return ['level' => 'Tinggi', 'class' => 'warning', 'desc' => 'Disarankan untuk berkonsultasi dengan profesional kesehatan mental.'];
        } elseif ($cfValue >= 0.4) {
            return ['level' => 'Sedang', 'class' => 'info', 'desc' => 'Perlu monitoring dan evaluasi lebih lanjut.'];
        } elseif ($cfValue >= 0.2) {
            return ['level' => 'Rendah', 'class' => 'secondary', 'desc' => 'Gejala minimal, tetap jaga kesehatan mental.'];
        } else {
            return ['level' => 'Sangat Rendah', 'class' => 'success', 'desc' => 'Tidak terindikasi gejala signifikan.'];
        }
    }
}
