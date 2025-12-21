<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the reports.
     */
    public function index()
    {
        $laporans = Laporan::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.laporan.index', compact('laporans'));
    }

    /**
     * Display the specified report.
     */
    public function show(Laporan $laporan)
    {
        return view('admin.laporan.show', compact('laporan'));
    }

    /**
     * Update the status of the report.
     */
    public function update(Request $request, Laporan $laporan)
    {
        $validated = $request->validate([
            'status' => 'required|in:baru,diproses,selesai',
            'catatan_admin' => 'nullable|string',
        ]);

        $laporan->update($validated);

        return redirect()->route('admin.laporan.index')
            ->with('success', 'Status laporan berhasil diperbarui.');
    }

    /**
     * Remove the specified report.
     */
    public function destroy(Laporan $laporan)
    {
        $laporan->delete();

        return redirect()->route('admin.laporan.index')
            ->with('success', 'Laporan berhasil dihapus.');
    }
}
