<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use App\Models\Gejala;
use App\Models\HasilDiagnosis;
use App\Models\Rule;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function dashboard() {
        $stats = [
            'totalGejala' => Gejala::count(),
            'totalDiagnosis' => Diagnosis::count(),
            'totalRules' => Rule::count(),
            'totalScreening' => HasilDiagnosis::count(),
        ];
        
        $recentScreenings = HasilDiagnosis::orderBy('created_at', 'desc')
            ->take(5)
            ->get();
            
        return view('admin.dashboard', compact('stats', 'recentScreenings'));
    }
    public function tables() {
        return view('admin.tables');
    }

     public function charts() {
        return view('admin.charts');
    }
     public function login() {
        return view('admin.login');
    }
    
}
