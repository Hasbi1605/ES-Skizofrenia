<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Store a new report from contact form.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'category' => 'required|string|in:bug,ui,feature,content,other',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Laporan::create([
            'nama' => $validated['name'],
            'email' => $validated['email'],
            'kategori' => $validated['category'],
            'judul' => $validated['subject'],
            'deskripsi' => $validated['message'],
            'status' => 'baru',
        ]);

        return redirect()->back()->with('success', 'Laporan Anda telah terkirim. Terima kasih atas kontribusi Anda!');
    }
}
