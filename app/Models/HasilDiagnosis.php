<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasilDiagnosis extends Model
{
    protected $table = 'hasil_diagnoses';

    protected $fillable = [
        'nama_pasien',
        'umur',
        'email',
        'alamat',
        'telepon',
        'jawaban',
        'hasil',
        'diagnosis_utama',
        'cf_tertinggi',
    ];

    protected $casts = [
        'jawaban' => 'array',
        'hasil' => 'array',
        'cf_tertinggi' => 'decimal:4',
    ];
}
