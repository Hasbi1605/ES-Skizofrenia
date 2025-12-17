@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Rules: {{ $diagnosis->nama }}</h1>
    <a href="{{ route('admin.rules.index') }}" class="btn btn-sm btn-secondary shadow-sm">
        <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <i class="fas fa-sliders-h"></i> Atur Nilai CF Pakar untuk {{ $diagnosis->kode }} - {{ $diagnosis->nama }}
        </h6>
    </div>
    <div class="card-body">
        <p class="text-muted mb-4">
            <i class="fas fa-info-circle"></i> 
            Masukkan nilai CF (Certainty Factor) antara <strong>0.00</strong> dan <strong>1.00</strong> untuk setiap gejala.
            Kosongkan jika gejala tidak relevan dengan diagnosis ini.
        </p>
        
        <form action="{{ route('admin.rules.update', $diagnosis) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th width="80">Kode</th>
                            <th>Gejala</th>
                            <th width="120">Kategori</th>
                            <th width="150">Nilai CF</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gejalas as $gejala)
                        @php
                            $rule = $rules->get($gejala->id);
                            $cfValue = $rule ? $rule->cf_pakar : '';
                        @endphp
                        <tr>
                            <td><span class="badge badge-primary">{{ $gejala->kode }}</span></td>
                            <td>{{ $gejala->nama }}</td>
                            <td>
                                @php
                                    $badgeClass = match($gejala->kategori) {
                                        'Positif' => 'badge-danger',
                                        'Negatif' => 'badge-warning',
                                        'Disorganisasi' => 'badge-info',
                                        'Prodromal' => 'badge-secondary',
                                        default => 'badge-light'
                                    };
                                @endphp
                                <span class="badge {{ $badgeClass }}">{{ $gejala->kategori }}</span>
                            </td>
                            <td>
                                <input type="number" 
                                       class="form-control form-control-sm" 
                                       name="cf[{{ $gejala->id }}]" 
                                       value="{{ $cfValue }}"
                                       min="0" max="1" step="0.01"
                                       placeholder="0.00 - 1.00">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan Perubahan
                </button>
                <a href="{{ route('admin.rules.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Batal
                </a>
            </div>
        </form>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-secondary">
            <i class="fas fa-lightbulb"></i> Panduan Nilai CF
        </h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Nilai CF</th>
                            <th>Interpretasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td><span class="badge badge-success">0.8 - 1.0</span></td><td>Sangat Yakin / Pasti</td></tr>
                        <tr><td><span class="badge badge-info">0.6 - 0.79</span></td><td>Yakin / Hampir Pasti</td></tr>
                        <tr><td><span class="badge badge-warning">0.4 - 0.59</span></td><td>Cukup Yakin</td></tr>
                        <tr><td><span class="badge badge-secondary">0.2 - 0.39</span></td><td>Kurang Yakin</td></tr>
                        <tr><td><span class="badge badge-light">0.0 - 0.19</span></td><td>Tidak Yakin</td></tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <div class="alert alert-info">
                    <strong>Tips:</strong>
                    <ul class="mb-0 pl-3">
                        <li>Nilai CF tinggi (0.8-1.0) untuk gejala khas/utama</li>
                        <li>Nilai CF sedang (0.4-0.7) untuk gejala pendukung</li>
                        <li>Kosongkan untuk gejala yang tidak relevan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
