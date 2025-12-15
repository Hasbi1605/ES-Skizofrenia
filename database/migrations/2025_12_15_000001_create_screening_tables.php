<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Tabel Diagnosis (P01-P05)
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 10)->unique(); // P01, P02, etc.
            $table->string('nama');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });

        // Tabel Gejala (G01-G17)
        Schema::create('gejalas', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 10)->unique(); // G01, G02, etc.
            $table->string('nama');
            $table->string('kategori'); // Positif, Negatif, Disorganisasi, Prodromal, Umum
            $table->timestamps();
        });

        // Tabel Rules (CF Pakar)
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gejala_id')->constrained('gejalas')->onDelete('cascade');
            $table->foreignId('diagnosis_id')->constrained('diagnoses')->onDelete('cascade');
            $table->decimal('cf_pakar', 3, 2); // 0.00 - 1.00
            $table->timestamps();

            $table->unique(['gejala_id', 'diagnosis_id']);
        });

        // Tabel Hasil Diagnosis
        Schema::create('hasil_diagnoses', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien');
            $table->integer('umur');
            $table->string('email');
            $table->string('alamat');
            $table->string('telepon');
            $table->json('jawaban'); // Store all answers as JSON
            $table->json('hasil'); // Store calculation results as JSON
            $table->string('diagnosis_utama')->nullable();
            $table->decimal('cf_tertinggi', 5, 4)->nullable(); // 0.0000 - 1.0000
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_diagnoses');
        Schema::dropIfExists('rules');
        Schema::dropIfExists('gejalas');
        Schema::dropIfExists('diagnoses');
    }
};
