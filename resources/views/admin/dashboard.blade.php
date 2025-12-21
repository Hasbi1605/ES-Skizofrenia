@extends('layouts.admin')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Statistics Cards -->
    <div class="row">
        <!-- Total Screening -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Screening</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['totalScreening'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Gejala -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Gejala</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['totalGejala'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-list-ul fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Diagnosis -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Diagnosis</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['totalDiagnosis'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-stethoscope fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Rules -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Rules (CF)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['totalRules'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-project-diagram fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Screenings & Quick Links -->
    <div class="row">
        <!-- Recent Screenings -->
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-history"></i> Screening Terbaru
                    </h6>
                    <a href="{{ route('admin.history.index') }}" class="btn btn-sm btn-primary">
                        Lihat Semua
                    </a>
                </div>
                <div class="card-body">
                    @if($recentScreenings->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>Nama Pasien</th>
                                    <th>Umur</th>
                                    <th>Diagnosis</th>
                                    <th>CF</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentScreenings as $screening)
                                <tr>
                                    <td>{{ $screening->nama_pasien }}</td>
                                    <td>{{ $screening->umur }} th</td>
                                    <td>
                                        @if($screening->diagnosis_utama)
                                            <span class="badge badge-primary">{{ $screening->diagnosis_utama }}</span>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($screening->cf_tertinggi)
                                            {{ number_format($screening->cf_tertinggi * 100, 1) }}%
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>{{ $screening->created_at->format('d M Y') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="text-center py-4">
                        <i class="fas fa-inbox fa-3x text-gray-300 mb-3"></i>
                        <p class="text-muted">Belum ada data screening</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-bolt"></i> Menu Cepat
                    </h6>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.gejala.index') }}" class="btn btn-success btn-block mb-2">
                        <i class="fas fa-list-ul"></i> Kelola Gejala
                    </a>
                    <a href="{{ route('admin.diagnosis.index') }}" class="btn btn-info btn-block mb-2">
                        <i class="fas fa-stethoscope"></i> Kelola Diagnosis
                    </a>
                    <a href="{{ route('admin.rules.index') }}" class="btn btn-warning btn-block mb-2">
                        <i class="fas fa-project-diagram"></i> Kelola Rules
                    </a>
                    <a href="{{ route('admin.history.index') }}" class="btn btn-primary btn-block">
                        <i class="fas fa-history"></i> Riwayat Screening
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection