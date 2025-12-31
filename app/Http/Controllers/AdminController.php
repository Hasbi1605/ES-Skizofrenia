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
        
        // Data untuk Donut Chart - Distribusi Diagnosis
        $diagnosisDistribution = HasilDiagnosis::selectRaw('diagnosis_utama, COUNT(*) as total')
            ->whereNotNull('diagnosis_utama')
            ->groupBy('diagnosis_utama')
            ->orderBy('total', 'desc')
            ->get();
        
        // Data untuk Line Chart - Trend Screening 7 Hari Terakhir
        $screeningTrend = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = now()->subDays($i);
            $count = HasilDiagnosis::whereDate('created_at', $date->toDateString())->count();
            $screeningTrend[] = [
                'date' => $date->format('d M'),
                'count' => $count
            ];
        }
            
        return view('admin.dashboard', compact(
            'stats', 
            'recentScreenings',
            'diagnosisDistribution',
            'screeningTrend'
        ));
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
