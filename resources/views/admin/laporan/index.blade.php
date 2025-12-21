@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan User</h1>
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
        <h6 class="m-0 font-weight-bold text-primary">Daftar Laporan dari User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="50">#</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th width="100">Status</th>
                        <th width="150">Tanggal</th>
                        <th width="100">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($laporans as $laporan)
                    <tr>
                        <td>{{ $loop->iteration + ($laporans->currentPage() - 1) * $laporans->perPage() }}</td>
                        <td>
                            <strong>{{ $laporan->nama }}</strong>
                            <br><small class="text-muted">{{ $laporan->email }}</small>
                        </td>
                        <td>
                            @php
                                $kategoriClass = match($laporan->kategori) {
                                    'bug' => 'badge-danger',
                                    'ui' => 'badge-info',
                                    'feature' => 'badge-primary',
                                    'content' => 'badge-warning',
                                    default => 'badge-secondary',
                                };
                            @endphp
                            <span class="badge {{ $kategoriClass }}">{{ $laporan->kategori_label }}</span>
                        </td>
                        <td>{{ Str::limit($laporan->judul, 40) }}</td>
                        <td>
                            <span class="badge {{ $laporan->status_badge }}">{{ ucfirst($laporan->status) }}</span>
                        </td>
                        <td>{{ $laporan->created_at->format('d M Y H:i') }}</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#detailModal{{ $laporan->id }}">
                                <i class="fas fa-eye"></i>
                            </button>
                            <form action="{{ route('admin.laporan.destroy', $laporan) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus laporan ini?')">
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
                        <td colspan="7" class="text-center">Belum ada laporan dari user</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="mt-3">
            {{ $laporans->links() }}
        </div>
    </div>
</div>

<!-- Detail Modals -->
@foreach($laporans as $laporan)
<div class="modal fade" id="detailModal{{ $laporan->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Laporan #{{ $laporan->id }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Nama:</strong> {{ $laporan->nama }}<br>
                        <strong>Email:</strong> {{ $laporan->email }}
                    </div>
                    <div class="col-md-6">
                        <strong>Kategori:</strong> <span class="badge {{ $kategoriClass ?? 'badge-secondary' }}">{{ $laporan->kategori_label }}</span><br>
                        <strong>Tanggal:</strong> {{ $laporan->created_at->format('d M Y H:i') }}
                    </div>
                </div>
                <div class="mb-3">
                    <strong>Judul:</strong><br>
                    {{ $laporan->judul }}
                </div>
                <div class="mb-3">
                    <strong>Deskripsi:</strong><br>
                    <div class="p-3 bg-light rounded">
                        {!! nl2br(e($laporan->deskripsi)) !!}
                    </div>
                </div>
                <hr>
                <form action="{{ route('admin.laporan.update', $laporan) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <label for="status{{ $laporan->id }}">Status:</label>
                            <select class="form-control" id="status{{ $laporan->id }}" name="status">
                                <option value="baru" {{ $laporan->status == 'baru' ? 'selected' : '' }}>Baru</option>
                                <option value="diproses" {{ $laporan->status == 'diproses' ? 'selected' : '' }}>Diproses</option>
                                <option value="selesai" {{ $laporan->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <label for="catatan{{ $laporan->id }}">Catatan Admin:</label>
                            <textarea class="form-control" id="catatan{{ $laporan->id }}" name="catatan_admin" rows="2">{{ $laporan->catatan_admin }}</textarea>
                        </div>
                    </div>
                    <div class="mt-3 text-right">
                        <button type="submit" class="btn btn-primary">Update Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
