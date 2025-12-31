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

    <!-- Charts Section -->
    <div class="row">
        <!-- Donut Chart - Distribusi Diagnosis -->
        <div class="col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-chart-pie"></i> Distribusi Hasil Diagnosis
                    </h6>
                </div>
                <div class="card-body">
                    @if($diagnosisDistribution->count() > 0)
                        <div class="chart-container" style="position: relative; height: 300px;">
                            <canvas id="diagnosisChart"></canvas>
                        </div>
                        <div class="mt-3 text-center small">
                            @foreach($diagnosisDistribution as $item)
                                <span class="mr-2">
                                    <i class="fas fa-circle" style="color: {{ ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', '#858796'][$loop->index % 6] }}"></i> 
                                    {{ $item->diagnosis_utama }} ({{ $item->total }})
                                </span>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-chart-pie fa-3x text-gray-300 mb-3"></i>
                            <p class="text-muted">Belum ada data screening</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Line Chart - Trend Screening -->
        <div class="col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-chart-line"></i> Trend Screening 7 Hari Terakhir
                    </h6>
                </div>
                <div class="card-body">
                    <div class="chart-container" style="position: relative; height: 350px;">
                        <canvas id="trendChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Donut Chart - Distribusi Diagnosis
    @if($diagnosisDistribution->count() > 0)
    const diagnosisCtx = document.getElementById('diagnosisChart').getContext('2d');
    new Chart(diagnosisCtx, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($diagnosisDistribution->pluck('diagnosis_utama')) !!},
            datasets: [{
                data: {!! json_encode($diagnosisDistribution->pluck('total')) !!},
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', '#858796'],
                hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#dda20a', '#be2617', '#60616f'],
                borderWidth: 2,
                borderColor: '#fff'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '60%',
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const total = context.dataset.data.reduce((a, b) => a + b, 0);
                            const percentage = ((context.raw / total) * 100).toFixed(1);
                            return context.label + ': ' + context.raw + ' (' + percentage + '%)';
                        }
                    }
                }
            }
        }
    });
    @endif

    // Line Chart - Trend Screening 7 Hari Terakhir
    const trendCtx = document.getElementById('trendChart').getContext('2d');
    new Chart(trendCtx, {
        type: 'line',
        data: {
            labels: {!! json_encode(array_column($screeningTrend, 'date')) !!},
            datasets: [{
                label: 'Jumlah Screening',
                data: {!! json_encode(array_column($screeningTrend, 'count')) !!},
                backgroundColor: 'rgba(78, 115, 223, 0.1)',
                borderColor: '#4e73df',
                borderWidth: 3,
                pointBackgroundColor: '#4e73df',
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 5,
                pointHoverRadius: 7,
                fill: true,
                tension: 0.3
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: '#2e59d9',
                    titleFont: { size: 14 },
                    bodyFont: { size: 13 },
                    padding: 12
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        font: { size: 12 }
                    }
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0,
                        font: { size: 12 }
                    },
                    grid: {
                        color: 'rgba(0,0,0,0.05)'
                    }
                }
            }
        }
    });
});
</script>
@endpush