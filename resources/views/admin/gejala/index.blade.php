@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Gejala</h1>
    <a href="{{ route('admin.gejala.create') }}" class="btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Gejala
    </a>
</div>

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <i class="fas fa-exclamation-triangle mr-2"></i>{{ session('error') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Gejala</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="80">Kode</th>
                        <th>Nama Gejala</th>
                        <th width="120">Kategori</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($gejalas as $gejala)
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
                            <a href="{{ route('admin.gejala.edit', $gejala) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.gejala.destroy', $gejala) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus gejala ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">Tidak ada data gejala</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="mt-3">
            {{ $gejalas->links() }}
        </div>
    </div>
</div>
@endsection
