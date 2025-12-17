@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Riwayat Screening</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <i class="fas fa-history"></i> Daftar Hasil Screening
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="50">#</th>
                        <th>Nama Pasien</th>
                        <th width="60">Umur</th>
                        <th>Diagnosis Utama</th>
                        <th width="100">CF Tertinggi</th>
                        <th width="150">Tanggal</th>
                        <th width="80">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($screenings as $index => $screening)
                    <tr>
                        <td>{{ $screenings->firstItem() + $index }}</td>
                        <td>
                            <strong>{{ $screening->nama_pasien }}</strong>
                            <br>
                            <small class="text-muted">{{ $screening->email }}</small>
                        </td>
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
                                @php
                                    $cfPercent = $screening->cf_tertinggi * 100;
                                    $badgeClass = $cfPercent >= 70 ? 'badge-danger' : 
                                                 ($cfPercent >= 50 ? 'badge-warning' : 'badge-success');
                                @endphp
                                <span class="badge {{ $badgeClass }}">
                                    {{ number_format($cfPercent, 1) }}%
                                </span>
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td>
                            <small>{{ $screening->created_at->format('d M Y') }}</small>
                            <br>
                            <small class="text-muted">{{ $screening->created_at->format('H:i') }}</small>
                        </td>
                        <td>
                            <a href="{{ route('admin.history.show', $screening->id) }}" class="btn btn-sm btn-info">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">Belum ada data screening</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="mt-3">
            {{ $screenings->links() }}
        </div>
    </div>
</div>
@endsection
