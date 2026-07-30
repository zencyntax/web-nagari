@extends('adminlte::page')

@section('title', 'Data Jabatan')

@section('content_header')
    <h1>Data Jabatan</h1>
@stop

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">

        <h3 class="card-title">
            Daftar Jabatan
        </h3>

        <a href="{{ route('admin.jabatan.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i>
            Tambah Jabatan
        </a>

    </div>

    <div class="card-body border-bottom">

        <form method="GET" action="{{ route('admin.jabatan.index') }}">

            <div class="input-group">

                <input
                    type="text"
                    name="search"
                    class="form-control"
                    placeholder="Cari jabatan..."
                    value="{{ request('search') }}">

                <div class="input-group-append">

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                        Cari
                    </button>

                    @if(request('search'))
                        <a href="{{ route('admin.jabatan.index') }}" class="btn btn-secondary">
                            Reset
                        </a>
                    @endif

                </div>

            </div>

        </form>

    </div>

    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead class="thead-light">

                <tr>

                    <th width="70">No</th>
                    <th>Nama Jabatan</th>
                    <th width="180" class="text-center">Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse($jabatans as $jabatan)

                    <tr>

                        <td>
                            {{ ($jabatans->currentPage() - 1) * $jabatans->perPage() + $loop->iteration }}
                        </td>

                        <td>{{ $jabatan->nama_jabatan }}</td>

                        <td class="text-center">

                            <a href="{{ route('admin.jabatan.edit', $jabatan) }}"
                               class="btn btn-warning btn-sm">

                                <i class="fas fa-edit"></i>
                                Edit

                            </a>

                            <form
                                action="{{ route('admin.jabatan.destroy', $jabatan) }}"
                                method="POST"
                                style="display:inline;">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm btn-delete">

                                    <i class="fas fa-trash"></i>
                                    Hapus

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="3" class="text-center">
                            Tidak ada data jabatan.
                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

        <div class="d-flex justify-content-end mt-3">

            {{ $jabatans->links() }}

        </div>

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
            text: 'Data yang dihapus tidak dapat dikembalikan.',
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
