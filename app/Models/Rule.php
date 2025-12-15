<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rule extends Model
{
    protected $fillable = ['gejala_id', 'diagnosis_id', 'cf_pakar'];

    protected $casts = [
        'cf_pakar' => 'decimal:2',
    ];

    public function gejala(): BelongsTo
    {
        return $this->belongsTo(Gejala::class);
    }

    public function diagnosis(): BelongsTo
    {
        return $this->belongsTo(Diagnosis::class);
    }
}
