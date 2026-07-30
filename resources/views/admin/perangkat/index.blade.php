@extends('adminlte::page')

@section('title', 'Data Perangkat')

@section('content_header')
    <h1>Data Perangkat</h1>
@stop

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">

        <h3 class="card-title">
            Daftar Perangkat
        </h3>

        <a href="{{ route('admin.perangkat.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i>
            Tambah Perangkat
        </a>

    </div>

    <div class="card-body border-bottom">

        <form method="GET" action="{{ route('admin.perangkat.index') }}">

            <div class="input-group">

                <input
                    type="text"
                    name="search"
                    class="form-control"
                    placeholder="Cari nama perangkat atau jabatan..."
                    value="{{ request('search') }}">

                <div class="input-group-append">

                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search"></i>
                        Cari
                    </button>

                    @if(request('search'))

                        <a href="{{ route('admin.perangkat.index') }}"
                           class="btn btn-secondary">
                            Reset
                        </a>

                    @endif

                </div>

            </div>

        </form>

    </div>

    <div class="card-body table-responsive p-0">

        <table class="table table-hover table-bordered">

            <thead>

                <tr>

                    <th width="60">No</th>
                    <th width="90">Foto</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th width="90">Urutan</th>
                    <th width="120">Status</th>
                    <th width="170" class="text-center">Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse($perangkats as $perangkat)

                    <tr>

                        <td>
                            {{ ($perangkats->currentPage() - 1) * $perangkats->perPage() + $loop->iteration }}
                        </td>

                        <td class="text-center">

                            @if($perangkat->foto)

                                <img src="{{ asset('storage/'.$perangkat->foto) }}"
                                     width="60"
                                     height="60"
                                     class="img-thumbnail"
                                     style="object-fit:cover;">

                            @else

                                <span class="text-muted">-</span>

                            @endif

                        </td>

                        <td>
                            {{ $perangkat->nama }}
                        </td>

                        <td>
                            {{ $perangkat->jabatan->nama_jabatan }}
                        </td>

                        <td>
                            {{ $perangkat->urutan }}
                        </td>

                        <td>

                            @if($perangkat->status)

                                <span class="badge badge-success">
                                    Aktif
                                </span>

                            @else

                                <span class="badge badge-danger">
                                    Tidak Aktif
                                </span>

                            @endif

                        </td>

                        <td class="text-center">

                            <a href="{{ route('admin.perangkat.edit', $perangkat) }}"
                               class="btn btn-warning btn-sm">

                                <i class="fas fa-edit"></i>

                            </a>

                            <form action="{{ route('admin.perangkat.destroy', $perangkat) }}"
                                  method="POST"
                                  style="display:inline;">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm btn-delete">

                                    <i class="fas fa-trash"></i>

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="7" class="text-center">

                            Belum ada data perangkat.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

    <div class="card-footer clearfix">

        {{ $perangkats->links() }}

    </div>

</div>

@stop

@section('js')

<script>

@if(session('success'))

Swal.fire({
    type: 'success',
    title: 'Berhasil',
    text: "{{ session('success') }}",
    timer: 2000,
    showConfirmButton: false
});

@endif

document.querySelectorAll('.btn-delete').forEach(function(button){

    button.addEventListener('click', function(e){

        e.preventDefault();

        const form = this.closest('form');

        Swal.fire({

            title: 'Hapus Data?',

            text: 'Data perangkat yang dihapus tidak dapat dikembalikan.',

            type: 'warning',

            showCancelButton: true,

            confirmButtonText: 'Ya, Hapus!',

            cancelButtonText: 'Batal'

        }).then((result) => {

            if(result.value){

                form.submit();

            }

        });

    });

});

</script>

@stop
