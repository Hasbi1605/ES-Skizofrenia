@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Screening</h1>
    <a href="{{ route('admin.history.index') }}" class="btn btn-sm btn-secondary shadow-sm">
        <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
    </a>
</div>

<div class="row">
    <!-- Data Pasien -->
    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user"></i> Data Pasien
                </h6>
            </div>
            <div class="card-body">
                <table class="table table-sm table-borderless">
                    <tr>
                        <td width="100"><strong>Nama</strong></td>
                        <td>{{ $screening->nama_pasien }}</td>
                    </tr>
                    <tr>
                        <td><strong>Umur</strong></td>
                        <td>{{ $screening->umur }} tahun</td>
                    </tr>
                    <tr>
                        <td><strong>Email</strong></td>
                        <td>{{ $screening->email }}</td>
                    </tr>
                    <tr>
                        <td><strong>Telepon</strong></td>
                        <td>{{ $screening->telepon }}</td>
                    </tr>
                    <tr>
                        <td><strong>Alamat</strong></td>
                        <td>{{ $screening->alamat }}</td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal</strong></td>
                        <td>{{ $screening->created_at->format('d M Y, H:i') }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Hasil Diagnosis -->
        <div class="card shadow mb-4 border-left-primary">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-stethoscope"></i> Hasil Diagnosis
                </h6>
            </div>
            <div class="card-body">
                @if($screening->diagnosis_utama)
                    <h4 class="text-primary">{{ $screening->diagnosis_utama }}</h4>
                    <div class="progress mb-2" style="height: 25px;">
                        @php $cfPercent = $screening->cf_tertinggi * 100; @endphp
                        <div class="progress-bar 
                            {{ $cfPercent >= 70 ? 'bg-danger' : ($cfPercent >= 50 ? 'bg-warning' : 'bg-success') }}" 
                            role="progressbar" 
                            style="width: {{ $cfPercent }}%">
                            {{ number_format($cfPercent, 1) }}%
                        </div>
                    </div>
                    <small class="text-muted">Tingkat Kepastian (CF)</small>
                @else
                    <p class="text-muted">Tidak ada diagnosis</p>
                @endif
            </div>
        </div>
    </div>

    <!-- Detail Hasil -->
    <div class="col-lg-8">
        <!-- Jawaban User -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-clipboard-list"></i> Jawaban Screening
                </h6>
            </div>
            <div class="card-body">
                @if($screening->jawaban && is_array($screening->jawaban))
                <div class="table-responsive">
                    <table class="table table-sm table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th width="80">Kode</th>
                                <th>Gejala</th>
                                <th width="140">Jawaban</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($screening->jawaban as $kodeGejala => $jawabanText)
                            <tr>
                                <td><span class="badge badge-primary">{{ $kodeGejala }}</span></td>
                                <td>
                                    @php
                                        $gejala = \App\Models\Gejala::where('kode', $kodeGejala)->first();
                                    @endphp
                                    {{ $gejala ? $gejala->nama : $kodeGejala }}
                                </td>
                                <td>
                                    @php
                                        // Map text jawaban ke label dan badge
                                        $jawabanLabels = [
                                            'tidak' => ['label' => 'Tidak', 'class' => 'badge-secondary'],
                                            'tidak_tahu' => ['label' => 'Tidak Tahu', 'class' => 'badge-light text-dark'],
                                            'sedikit_yakin' => ['label' => 'Sedikit Yakin', 'class' => 'badge-info'],
                                            'cukup_yakin' => ['label' => 'Cukup Yakin', 'class' => 'badge-primary'],
                                            'yakin' => ['label' => 'Yakin', 'class' => 'badge-warning'],
                                            'sangat_yakin' => ['label' => 'Sangat Yakin', 'class' => 'badge-danger'],
                                        ];
                                        $jawabanInfo = $jawabanLabels[$jawabanText] ?? ['label' => $jawabanText, 'class' => 'badge-secondary'];
                                    @endphp
                                    <span class="badge {{ $jawabanInfo['class'] }}">{{ $jawabanInfo['label'] }}</span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <p class="text-muted">Data jawaban tidak tersedia</p>
                @endif
            </div>
        </div>

        <!-- Hasil Perhitungan CF -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-calculator"></i> Hasil Perhitungan CF
                </h6>
            </div>
            <div class="card-body">
                @if($screening->hasil && is_array($screening->hasil))
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th width="100">Kode</th>
                                <th>Diagnosis</th>
                                <th width="120">Nilai CF</th>
                                <th width="200">Progress</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($screening->hasil as $kode => $hasilItem)
                            @php
                                // Handle both old format (direct value) and new format (array with cf_final)
                                if (is_array($hasilItem)) {
                                    $cfFinal = $hasilItem['cf_final'] ?? 0;
                                    $diagnosisNama = $hasilItem['diagnosis']['nama'] ?? $kode;
                                } else {
                                    $cfFinal = floatval($hasilItem);
                                    $diagnosisNama = $kode;
                                }
                                $cfP = $cfFinal * 100;
                            @endphp
                            <tr>
                                <td><span class="badge badge-dark">{{ $kode }}</span></td>
                                <td><strong>{{ $diagnosisNama }}</strong></td>
                                <td>
                                    <span class="badge 
                                        {{ $cfP >= 70 ? 'badge-danger' : ($cfP >= 50 ? 'badge-warning' : 'badge-success') }}">
                                        {{ number_format($cfP, 2) }}%
                                    </span>
                                </td>
                                <td>
                                    <div class="progress" style="height: 20px;">
                                        <div class="progress-bar 
                                            {{ $cfP >= 70 ? 'bg-danger' : ($cfP >= 50 ? 'bg-warning' : 'bg-success') }}" 
                                            role="progressbar" 
                                            style="width: {{ $cfP }}%">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <p class="text-muted">Data hasil perhitungan tidak tersedia</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

