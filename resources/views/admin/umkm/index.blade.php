@extends('adminlte::page')

@section('title', 'Data UMKM')

@section('content_header')

<div class="d-flex justify-content-between align-items-center">

    <h1>Data UMKM</h1>

    <a href="{{ route('admin.umkm.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i>
        Tambah UMKM
    </a>

</div>

@stop

@section('content')

<div class="card">

    <div class="card-header">

        <form method="GET" action="{{ route('admin.umkm.index') }}">

            <div class="input-group">

                <input
                    type="text"
                    name="search"
                    class="form-control"
                    placeholder="Cari nama UMKM atau pemilik..."
                    value="{{ $search }}">

                <button class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>

            </div>

        </form>

    </div>

    <div class="card-body table-responsive p-0">

        <table class="table table-hover text-nowrap">

            <thead>

            <tr>

                <th width="60">No</th>

                <th>Logo</th>

                <th>Foto</th>

                <th>Nama UMKM</th>

                <th>Kategori</th>

                <th>Pemilik</th>

                <th>Status</th>

                <th width="170">Aksi</th>

            </tr>

            </thead>

            <tbody>

            @forelse($umkms as $umkm)

                <tr>

                    <td>
                        {{ $loop->iteration + ($umkms->firstItem() - 1) }}
                    </td>

                    <td>

                        @if($umkm->logo)

                            <img
                                src="{{ asset('storage/'.$umkm->logo) }}"
                                width="60"
                                class="img-thumbnail">

                        @else

                            <span class="text-muted">-</span>

                        @endif

                    </td>

                    <td>

                        @if($umkm->foto)

                            <img
                                src="{{ asset('storage/'.$umkm->foto) }}"
                                width="90"
                                class="img-thumbnail">

                        @else

                            <span class="text-muted">-</span>

                        @endif

                    </td>

                    <td>

                        <strong>{{ $umkm->nama }}</strong>

                        @if($umkm->alamat)
                            <br>
                            <small class="text-muted">
                                {{ $umkm->alamat }}
                            </small>
                        @endif

                    </td>

                    <td>

                        <span class="badge bg-info">
                            {{ $umkm->category->nama }}
                        </span>

                    </td>

                    <td>{{ $umkm->pemilik }}</td>

                    <td>

                        @if($umkm->status)

                            <span class="badge bg-success">
                                Aktif
                            </span>

                        @else

                            <span class="badge bg-danger">
                                Nonaktif
                            </span>

                        @endif

                    </td>

                    <td>

                        <a
                            href="{{ route('admin.umkm.edit',$umkm) }}"
                            class="btn btn-warning btn-sm">

                            <i class="fas fa-edit"></i>

                        </a>

                        <form
                            action="{{ route('admin.umkm.destroy',$umkm) }}"
                            method="POST"
                            class="d-inline form-delete">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">

                                <i class="fas fa-trash"></i>

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="8" class="text-center py-3">

                        Belum ada data UMKM.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    @if($umkms->hasPages())

        <div class="card-footer">

            {{ $umkms->links() }}

        </div>

    @endif

</div>

@stop

@section('js')

@if(session('success'))

<script>

Swal.fire({

    type: 'success',

    title: 'Berhasil',

    text: '{{ session('success') }}'

});

</script>

@endif

<script>

$('.form-delete').submit(function(e){

    e.preventDefault();

    let form = this;

    Swal.fire({

        title: 'Hapus UMKM?',

        text: 'Data yang dihapus tidak dapat dikembalikan.',

        type: 'warning',

        showCancelButton: true,

        confirmButtonText: 'Ya, hapus',

        cancelButtonText: 'Batal'

    }).then(function(result){

        if(result.value){

            form.submit();

        }

    });

});

</script>

@stop
