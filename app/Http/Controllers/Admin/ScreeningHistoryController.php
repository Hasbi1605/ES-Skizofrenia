<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HasilDiagnosis;
use Illuminate\Http\Request;

class ScreeningHistoryController extends Controller
{
    /**
     * Display a listing of all screening results.
     */
    public function index()
    {
        $screenings = HasilDiagnosis::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.history.index', compact('screenings'));
    }

    /**
     * Display the specified screening result.
     */
    public function show($id)
    {
        $screening = HasilDiagnosis::findOrFail($id);
        return view('admin.history.show', compact('screening'));
    }
}
