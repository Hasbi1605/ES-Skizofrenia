<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diagnosis;
use App\Models\Rule;
use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diagnoses = Diagnosis::orderBy('kode')->paginate(15);
        return view('admin.diagnosis.index', compact('diagnoses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.diagnosis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required|string|max:10|unique:diagnoses,kode',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        Diagnosis::create($validated);

        return redirect()->route('admin.diagnosis.index')
            ->with('success', 'Diagnosis berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diagnosis $diagnosis)
    {
        return view('admin.diagnosis.edit', compact('diagnosis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Diagnosis $diagnosis)
    {
        $validated = $request->validate([
            'kode' => 'required|string|max:10|unique:diagnoses,kode,' . $diagnosis->id,
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $diagnosis->update($validated);

        return redirect()->route('admin.diagnosis.index')
            ->with('success', 'Diagnosis berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diagnosis $diagnosis)
    {
        // Cek apakah diagnosis memiliki rules (CF Pakar)
        $rulesCount = Rule::where('diagnosis_id', $diagnosis->id)->count();
        
        if ($rulesCount > 0) {
            return redirect()->route('admin.diagnosis.index')
                ->with('error', "Diagnosis '{$diagnosis->kode}' tidak dapat dihapus karena memiliki {$rulesCount} rules (CF Pakar) yang terkait. Hapus rules terlebih dahulu.");
        }
        
        $diagnosis->delete();

        return redirect()->route('admin.diagnosis.index')
            ->with('success', 'Diagnosis berhasil dihapus.');
    }
}
