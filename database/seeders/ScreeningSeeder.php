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
     */
    public function run(): void
    {
        // Seed Diagnoses (P01-P05)
        $diagnoses = [
            ['kode' => 'P01', 'nama' => 'Skizofrenia Paranoid', 'deskripsi' => 'Risiko Tinggi: Gejala Psikotik (Positif) - Dominasi halusinasi dan delusi'],
            ['kode' => 'P02', 'nama' => 'Skizofrenia Hebefrenik', 'deskripsi' => 'Risiko Tinggi: Gejala Negatif - Dominasi gangguan emosi dan perilaku'],
            ['kode' => 'P03', 'nama' => 'Skizofrenia Katatonik', 'deskripsi' => 'Risiko Sedang: Gangguan Disorganisasi - Dominasi gangguan motorik dan bicara'],
            ['kode' => 'P04', 'nama' => 'Fase Prodromal', 'deskripsi' => 'Risiko Sedang: Fase Awal - Gejala awal sebelum onset penuh'],
            ['kode' => 'P05', 'nama' => 'Gejala Umum/Ringan', 'deskripsi' => 'Risiko Rendah: Gejala Umum/Stres Ringan - Perlu monitoring'],
        ];

        foreach ($diagnoses as $diagnosis) {
            Diagnosis::create($diagnosis);
        }

        // Seed Gejala (G01-G17) dengan kategori
        $gejalas = [
            // Gejala Positif (Psikotik)
            ['kode' => 'G01', 'nama' => 'Mendengar suara/bisikan yang tidak didengar orang lain', 'kategori' => 'Positif'],
            ['kode' => 'G02', 'nama' => 'Melihat bayangan/sosok yang tidak nyata', 'kategori' => 'Positif'],
            ['kode' => 'G03', 'nama' => 'Merasa diawasi, dimata-matai, atau diikuti orang', 'kategori' => 'Positif'],
            ['kode' => 'G04', 'nama' => 'Merasa pikiran dikendalikan atau dibaca orang lain', 'kategori' => 'Positif'],
            ['kode' => 'G05', 'nama' => 'Merasa memiliki kekuatan super atau menjadi utusan khusus', 'kategori' => 'Positif'],
            
            // Gejala Negatif
            ['kode' => 'G06', 'nama' => 'Kehilangan minat drastis pada hobi/aktivitas (Anhedonia)', 'kategori' => 'Negatif'],
            ['kode' => 'G07', 'nama' => 'Menarik diri sepenuhnya dari teman dan keluarga', 'kategori' => 'Negatif'],
            ['kode' => 'G08', 'nama' => 'Malas merawat diri (jarang mandi, berantakan)', 'kategori' => 'Negatif'],
            
            // Gejala Disorganisasi
            ['kode' => 'G09', 'nama' => 'Ekspresi wajah datar/kosong saat bicara (Flat Affect)', 'kategori' => 'Disorganisasi'],
            ['kode' => 'G10', 'nama' => 'Bicara melantur, berpindah topik tanpa kaitan jelas', 'kategori' => 'Disorganisasi'],
            ['kode' => 'G11', 'nama' => 'Sering lupa atau kehilangan alur pikir saat bicara', 'kategori' => 'Disorganisasi'],
            
            // Gejala Prodromal
            ['kode' => 'G12', 'nama' => 'Perilaku aneh/tidak wajar (tertawa sendiri tanpa sebab)', 'kategori' => 'Prodromal'],
            ['kode' => 'G13', 'nama' => 'Penurunan prestasi sekolah/kerja secara tiba-tiba', 'kategori' => 'Prodromal'],
            ['kode' => 'G14', 'nama' => 'Pola tidur sangat kacau (siang jadi malam)', 'kategori' => 'Prodromal'],
            ['kode' => 'G15', 'nama' => 'Mudah curiga pada orang sekitar tanpa alasan kuat', 'kategori' => 'Prodromal'],
            
            // Gejala Umum
            ['kode' => 'G16', 'nama' => 'Merasa cemas berlebihan atau gelisah', 'kategori' => 'Umum'],
            ['kode' => 'G17', 'nama' => 'Sulit berkonsentrasi pada tugas ringan', 'kategori' => 'Umum'],
        ];

        foreach ($gejalas as $gejala) {
            Gejala::create($gejala);
        }

        // Seed Rules (CF Pakar) berdasarkan data Excel
        // Format: [kode_gejala => [P01, P02, P03, P04, P05]]
        $cfPakar = [
            'G01' => [0.9, null, null, null, 0.2],
            'G02' => [0.8, null, null, null, null],
            'G03' => [0.7, null, 0.4, null, null],
            'G04' => [0.9, null, null, null, null],
            'G05' => [0.8, null, null, null, null],
            'G06' => [null, 0.6, null, 0.4, 0.2],
            'G07' => [null, 0.8, null, 0.5, null],
            'G08' => [null, 0.7, null, null, 0.3],
            'G09' => [null, 0.7, null, null, null],
            'G10' => [null, null, 0.8, null, null],
            'G11' => [null, null, 0.6, 0.4, 0.2],
            'G12' => [null, null, 0.7, null, null],
            'G13' => [null, 0.3, null, 0.6, 0.2],
            'G14' => [null, null, 0.5, 0.5, 0.7, 0.6, 0.4, 0.5],
            'G15' => [null, 0.4, null, 0.5, 0.4, 0.8],
            'G16' => [null, null, 0.4, 0.3, 0.9, 0.6, 0.5, 0.7],
            'G17' => [null, null, 0.3, 0.5, 0.3, 0.5, 0.2, 0.2],
        ];

        // Fix the CF Pakar data based on Excel (re-mapping correctly)
        $cfPakarCorrect = [
            'G01' => ['P01' => 0.9, 'P05' => 0.2],
            'G02' => ['P01' => 0.8],
            'G03' => ['P01' => 0.7, 'P03' => 0.4],
            'G04' => ['P01' => 0.9],
            'G05' => ['P01' => 0.8],
            'G06' => ['P02' => 0.6, 'P04' => 0.4, 'P05' => 0.2],
            'G07' => ['P02' => 0.8, 'P04' => 0.5],
            'G08' => ['P02' => 0.7, 'P05' => 0.3],
            'G09' => ['P02' => 0.7],
            'G10' => ['P03' => 0.8],
            'G11' => ['P03' => 0.6, 'P04' => 0.4, 'P05' => 0.2],
            'G12' => ['P03' => 0.7],
            'G13' => ['P02' => 0.3, 'P04' => 0.6, 'P05' => 0.2],
            'G14' => ['P04' => 0.5, 'P05' => 0.5],
            'G15' => ['P04' => 0.4, 'P05' => 0.8],
            'G16' => ['P04' => 0.4, 'P05' => 0.7],
            'G17' => ['P04' => 0.3, 'P05' => 0.5],
        ];

        foreach ($cfPakarCorrect as $kodeGejala => $diagnosisCf) {
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
