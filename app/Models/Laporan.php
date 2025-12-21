<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'kategori',
        'judul',
        'deskripsi',
        'status',
        'catatan_admin',
    ];

    /**
     * Get kategori label
     */
    public function getKategoriLabelAttribute(): string
    {
        return match($this->kategori) {
            'bug' => 'Bug / Error',
            'ui' => 'Masalah UI/UX',
            'feature' => 'Saran Fitur',
            'content' => 'Koreksi Konten',
            'other' => 'Lainnya',
            default => $this->kategori,
        };
    }

    /**
     * Get status badge class
     */
    public function getStatusBadgeAttribute(): string
    {
        return match($this->status) {
            'baru' => 'badge-warning',
            'diproses' => 'badge-info',
            'selesai' => 'badge-success',
            default => 'badge-secondary',
        };
    }
}
