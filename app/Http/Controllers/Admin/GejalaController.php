<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gejalas = Gejala::orderBy('kode')->paginate(15);
        return view('admin.gejala.index', compact('gejalas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = ['Positif', 'Negatif', 'Disorganisasi', 'Prodromal', 'Umum'];
        return view('admin.gejala.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required|string|max:10|unique:gejalas,kode',
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string',
        ]);

        Gejala::create($validated);

        return redirect()->route('admin.gejala.index')
            ->with('success', 'Gejala berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gejala $gejala)
    {
        $kategoris = ['Positif', 'Negatif', 'Disorganisasi', 'Prodromal', 'Umum'];
        return view('admin.gejala.edit', compact('gejala', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gejala $gejala)
    {
        $validated = $request->validate([
            'kode' => 'required|string|max:10|unique:gejalas,kode,' . $gejala->id,
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string',
        ]);

        $gejala->update($validated);

        return redirect()->route('admin.gejala.index')
            ->with('success', 'Gejala berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gejala $gejala)
    {
        $gejala->delete();

        return redirect()->route('admin.gejala.index')
            ->with('success', 'Gejala berhasil dihapus.');
    }
}
