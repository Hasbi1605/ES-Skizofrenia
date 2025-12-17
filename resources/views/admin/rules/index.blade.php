@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Rules (Basis Pengetahuan)</h1>
</div>

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <i class="fas fa-project-diagram"></i> Matrix CF Pakar (Gejala × Diagnosis)
        </h6>
    </div>
    <div class="card-body">
        <p class="text-muted mb-3">
            <i class="fas fa-info-circle"></i> 
            Tabel ini menunjukkan nilai CF (Certainty Factor) dari pakar untuk setiap kombinasi gejala dan diagnosis.
            Klik tombol "Edit" untuk mengubah nilai CF per diagnosis.
        </p>
        
        <div class="table-responsive">
            <table class="table table-bordered table-sm" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center" style="min-width: 80px;">Kode</th>
                        <th style="min-width: 250px;">Gejala</th>
                        @foreach($diagnoses as $diagnosis)
                        <th class="text-center" style="min-width: 100px;">
                            <span class="badge badge-info">{{ $diagnosis->kode }}</span>
                            <br>
                            <small>{{ Str::limit($diagnosis->nama, 15) }}</small>
                        </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($gejalas as $gejala)
                    <tr>
                        <td class="text-center">
                            <span class="badge badge-primary">{{ $gejala->kode }}</span>
                        </td>
                        <td>
                            <small>{{ $gejala->nama }}</small>
                            <br>
                            @php
                                $badgeClass = match($gejala->kategori) {
                                    'Positif' => 'badge-danger',
                                    'Negatif' => 'badge-warning',
                                    'Disorganisasi' => 'badge-info',
                                    'Prodromal' => 'badge-secondary',
                                    default => 'badge-light'
                                };
                            @endphp
                            <span class="badge {{ $badgeClass }}" style="font-size: 0.65rem;">{{ $gejala->kategori }}</span>
                        </td>
                        @foreach($diagnoses as $diagnosis)
                        @php
                            $key = $gejala->id . '-' . $diagnosis->id;
                            $rule = $rules->get($key);
                            $cf = $rule ? $rule->cf_pakar : null;
                        @endphp
                        <td class="text-center">
                            @if($cf !== null)
                                <span class="badge badge-success">{{ number_format($cf, 2) }}</span>
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <hr>
        
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h6 class="font-weight-bold text-primary mb-0">
                <i class="fas fa-edit"></i> Edit Rules per Diagnosis
            </h6>
            <div class="d-flex flex-wrap gap-2">
                @foreach($diagnoses as $diagnosis)
                <a href="{{ route('admin.rules.edit', $diagnosis) }}" class="btn btn-outline-primary btn-sm mr-2 mb-1">
                    <span class="badge badge-primary mr-1">{{ $diagnosis->kode }}</span>
                    {{ Str::limit($diagnosis->nama, 20) }}
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .table-sm td, .table-sm th {
        padding: 0.4rem;
        font-size: 0.85rem;
    }
</style>
@endpush
