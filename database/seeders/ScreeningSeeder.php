<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Diagnosis;
use App\Models\Gejala;
use App\Models\Rule;

class ScreeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * Referensi Ilmiah:
     * - PPDGJ-III (Maslim, 2001)
     * - ICD-10 (WHO, 1992) - Kode F20.0-F20.2
     * - DSM-5 (APA, 2013)
     * - PANSS Scale (Kay et al., 1987)
     */
    public function run(): void
    {
        // Seed Diagnoses (P01-P05) dengan referensi ICD-10
        $diagnoses = [
            [
                'kode' => 'P01', 
                'nama' => 'Skizofrenia Paranoid', 
                'deskripsi' => 'ICD-10 F20.0 - Risiko Tinggi: Dominasi waham persekutorik/kebesaran dan halusinasi auditorik. Fungsi kognitif relatif terjaga.'
            ],
            [
                'kode' => 'P02', 
                'nama' => 'Skizofrenia Hebefrenik', 
                'deskripsi' => 'ICD-10 F20.1 - Risiko Tinggi: Onset 15-25 tahun, afek dangkal, giggling, perilaku tidak terprediksi. Prognosis umumnya buruk.'
            ],
            [
                'kode' => 'P03', 
                'nama' => 'Skizofrenia Katatonik', 
                'deskripsi' => 'ICD-10 F20.2 - Risiko Tinggi: Gangguan psikomotorik menonjol (stupor, negativisme, rigiditas, posturing, excitement).'
            ],
            [
                'kode' => 'P04', 
                'nama' => 'Fase Prodromal', 
                'deskripsi' => 'Risiko Sedang: Fase awal sebelum onset penuh. Gejala subklinis yang perlu monitoring ketat.'
            ],
            [
                'kode' => 'P05', 
                'nama' => 'Gejala Umum/Ringan', 
                'deskripsi' => 'Risiko Rendah: Gejala umum/stres ringan yang memerlukan monitoring lebih lanjut.'
            ],
        ];

        foreach ($diagnoses as $diagnosis) {
            Diagnosis::create($diagnosis);
        }

        // Seed Gejala (G01-G30) dengan kategori 
        $gejalas = [
            // ==========================
            // GEJALA POSITIF (Psikotik)
            // ==========================
            ['kode' => 'G01', 'nama' => 'Mendengar suara atau bisikan yang tidak didengar orang lain', 'kategori' => 'Positif'],
            ['kode' => 'G02', 'nama' => 'Melihat bayangan atau sosok yang tidak nyata', 'kategori' => 'Positif'],
            ['kode' => 'G03', 'nama' => 'Merasa diawasi, dimata-matai, atau diikuti orang lain', 'kategori' => 'Positif'],
            ['kode' => 'G04', 'nama' => 'Merasa pikiran dikendalikan atau dibaca orang lain', 'kategori' => 'Positif'],
            ['kode' => 'G05', 'nama' => 'Merasa memiliki kekuatan super atau menjadi utusan khusus', 'kategori' => 'Positif'],
            
            // Gejala Positif Tambahan 
            ['kode' => 'G18', 'nama' => 'Merasa pikiran bergema di dalam kepala', 'kategori' => 'Positif'],
            ['kode' => 'G19', 'nama' => 'Merasa ada pikiran asing yang disisipkan ke dalam kepala', 'kategori' => 'Positif'],
            ['kode' => 'G20', 'nama' => 'Merasa pikiran dicuri atau ditarik keluar dari kepala', 'kategori' => 'Positif'],
            ['kode' => 'G21', 'nama' => 'Merasa pikiran disiarkan sehingga orang lain tahu isi pikiran', 'kategori' => 'Positif'],
            
            // =========================
            // GEJALA NEGATIF
            // =========================
            ['kode' => 'G06', 'nama' => 'Kehilangan minat drastis pada hobi atau aktivitas yang dulu disukai', 'kategori' => 'Negatif'],
            ['kode' => 'G07', 'nama' => 'Menarik diri sepenuhnya dari teman dan keluarga', 'kategori' => 'Negatif'],
            ['kode' => 'G08', 'nama' => 'Malas merawat diri seperti jarang mandi dan berpenampilan berantakan', 'kategori' => 'Negatif'],
            ['kode' => 'G09', 'nama' => 'Ekspresi wajah datar atau kosong saat berbicara', 'kategori' => 'Negatif'],
            
            // Gejala Negatif Tambahan 
            ['kode' => 'G22', 'nama' => 'Bicara sangat sedikit atau miskin ide', 'kategori' => 'Negatif'],
            ['kode' => 'G23', 'nama' => 'Tidak ada motivasi untuk melakukan aktivitas apapun', 'kategori' => 'Negatif'],
            ['kode' => 'G24', 'nama' => 'Tertawa atau menangis pada saat yang tidak sesuai', 'kategori' => 'Negatif'],
            
            // =========================
            // GEJALA DISORGANISASI
            // =========================
            ['kode' => 'G10', 'nama' => 'Bicara melantur, berpindah topik tanpa kaitan jelas', 'kategori' => 'Disorganisasi'],
            ['kode' => 'G11', 'nama' => 'Sering lupa atau kehilangan alur pikir saat bicara', 'kategori' => 'Disorganisasi'],
            ['kode' => 'G12', 'nama' => 'Perilaku aneh atau tidak wajar seperti tertawa sendiri tanpa sebab', 'kategori' => 'Disorganisasi'],
            
            // =========================
            // GEJALA KATATONIK
            // =========================
            ['kode' => 'G25', 'nama' => 'Diam tidak bergerak dalam waktu lama', 'kategori' => 'Katatonik'],
            ['kode' => 'G26', 'nama' => 'Menolak semua instruksi atau melakukan kebalikannya', 'kategori' => 'Katatonik'],
            ['kode' => 'G27', 'nama' => 'Mempertahankan posisi tubuh aneh dalam waktu lama', 'kategori' => 'Katatonik'],
            ['kode' => 'G28', 'nama' => 'Tidak mau berbicara sama sekali', 'kategori' => 'Katatonik'],
            ['kode' => 'G29', 'nama' => 'Tubuh dapat dibentuk dan mempertahankan posisi tersebut', 'kategori' => 'Katatonik'],
            ['kode' => 'G30', 'nama' => 'Gerakan berlebihan tanpa tujuan yang jelas', 'kategori' => 'Katatonik'],
            
            // =========================
            // GEJALA PRODROMAL
            // =========================
            ['kode' => 'G13', 'nama' => 'Penurunan prestasi sekolah atau kerja secara tiba-tiba dan drastis', 'kategori' => 'Prodromal'],
            ['kode' => 'G14', 'nama' => 'Pola tidur sangat kacau seperti siang jadi malam atau sebaliknya', 'kategori' => 'Prodromal'],
            ['kode' => 'G15', 'nama' => 'Mudah curiga pada orang sekitar tanpa alasan yang kuat', 'kategori' => 'Prodromal'],
            
            // =========================
            // GEJALA UMUM
            // =========================
            ['kode' => 'G16', 'nama' => 'Merasa cemas berlebihan atau gelisah terus-menerus', 'kategori' => 'Umum'],
            ['kode' => 'G17', 'nama' => 'Sulit berkonsentrasi bahkan pada tugas ringan sehari-hari', 'kategori' => 'Umum'],
        ];

        foreach ($gejalas as $gejala) {
            Gejala::create($gejala);
        }

        // Seed Rules (CF Pakar) 
        $cfPakarScientific = [
            // P01 - Skizofrenia Paranoid
            'G01' => ['P01' => 0.95, 'P05' => 0.2],
            'G02' => ['P01' => 0.6],
            'G03' => ['P01' => 0.95, 'P03' => 0.3],
            'G04' => ['P01' => 0.9],
            'G05' => ['P01' => 0.85],
            'G18' => ['P01' => 0.9],
            'G19' => ['P01' => 0.9],
            'G20' => ['P01' => 0.9],
            'G21' => ['P01' => 0.85],
            
            // P02 - Skizofrenia Hebefrenik
            'G06' => ['P02' => 0.7, 'P04' => 0.5, 'P05' => 0.2],
            'G07' => ['P02' => 0.75, 'P04' => 0.6],
            'G08' => ['P02' => 0.8, 'P05' => 0.3],
            'G09' => ['P02' => 0.85],
            'G22' => ['P02' => 0.8],
            'G23' => ['P02' => 0.85],
            'G24' => ['P02' => 0.9, 'P03' => 0.4],
            'G13' => ['P02' => 0.55, 'P04' => 0.7, 'P05' => 0.2],
            
            // P03 - Skizofrenia Katatonik
            'G25' => ['P03' => 0.95],
            'G26' => ['P03' => 0.9],
            'G27' => ['P03' => 0.9],
            'G28' => ['P03' => 0.85],
            'G29' => ['P03' => 0.95],
            'G30' => ['P03' => 0.8],
            'G10' => ['P03' => 0.5, 'P02' => 0.4],
            'G11' => ['P03' => 0.4, 'P04' => 0.5, 'P05' => 0.2],
            'G12' => ['P03' => 0.75, 'P02' => 0.6],
            
            // P04 - Fase Prodromal & P05 - Gejala Umum
            'G14' => ['P04' => 0.55, 'P05' => 0.5],
            'G15' => ['P04' => 0.6, 'P05' => 0.4],
            'G16' => ['P04' => 0.5, 'P05' => 0.7],
            'G17' => ['P04' => 0.55, 'P05' => 0.5],
        ];

        foreach ($cfPakarScientific as $kodeGejala => $diagnosisCf) {
            $gejala = Gejala::where('kode', $kodeGejala)->first();
            
            foreach ($diagnosisCf as $kodeDiagnosis => $cf) {
                $diagnosis = Diagnosis::where('kode', $kodeDiagnosis)->first();
                
                if ($gejala && $diagnosis && $cf !== null) {
                    Rule::create([
                        'gejala_id' => $gejala->id,
                        'diagnosis_id' => $diagnosis->id,
                        'cf_pakar' => $cf,
                    ]);
                }
            }
        }
    }
}
