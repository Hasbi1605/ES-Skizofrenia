<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diagnosis;
use App\Models\Gejala;
use App\Models\Rule;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    /**
     * Display the rules matrix (gejala x diagnosis with CF values).
     */
    public function index()
    {
        $diagnoses = Diagnosis::orderBy('kode')->get();
        $gejalas = Gejala::orderBy('kode')->get();
        $rules = Rule::all()->keyBy(function ($rule) {
            return $rule->gejala_id . '-' . $rule->diagnosis_id;
        });

        return view('admin.rules.index', compact('diagnoses', 'gejalas', 'rules'));
    }

    /**
     * Show the form for editing rules for a specific diagnosis.
     */
    public function edit(Diagnosis $diagnosis)
    {
        $gejalas = Gejala::orderBy('kode')->get();
        $rules = Rule::where('diagnosis_id', $diagnosis->id)
            ->get()
            ->keyBy('gejala_id');

        return view('admin.rules.edit', compact('diagnosis', 'gejalas', 'rules'));
    }

    /**
     * Update rules for a specific diagnosis.
     */
    public function update(Request $request, Diagnosis $diagnosis)
    {
        $cfValues = $request->input('cf', []);

        foreach ($cfValues as $gejalaId => $cfValue) {
            // Hapus rule jika nilai kosong, null, atau 0
            if ($cfValue === null || $cfValue === '' || floatval($cfValue) == 0) {
                // Remove rule if CF is empty or 0
                Rule::where('gejala_id', $gejalaId)
                    ->where('diagnosis_id', $diagnosis->id)
                    ->delete();
            } else {
                // Update or create rule dengan nilai CF > 0
                Rule::updateOrCreate(
                    [
                        'gejala_id' => $gejalaId,
                        'diagnosis_id' => $diagnosis->id,
                    ],
                    [
                        'cf_pakar' => floatval($cfValue),
                    ]
                );
            }
        }

        return redirect()->route('admin.rules.index')
            ->with('success', 'Rules untuk ' . $diagnosis->nama . ' berhasil diperbarui.');
    }
}
