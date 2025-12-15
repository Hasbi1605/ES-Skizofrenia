<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Diagnosis extends Model
{
    protected $fillable = ['kode', 'nama', 'deskripsi'];

    public function rules(): HasMany
    {
        return $this->hasMany(Rule::class);
    }

    public function gejalas()
    {
        return $this->belongsToMany(Gejala::class, 'rules')
            ->withPivot('cf_pakar')
            ->withTimestamps();
    }
}
