<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gejala extends Model
{
    protected $fillable = ['kode', 'nama', 'kategori'];

    public function rules(): HasMany
    {
        return $this->hasMany(Rule::class);
    }

    public function diagnoses()
    {
        return $this->belongsToMany(Diagnosis::class, 'rules')
            ->withPivot('cf_pakar')
            ->withTimestamps();
    }
}
