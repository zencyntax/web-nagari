@extends('adminlte::page')

@section('title', 'Kategori UMKM')

@section('content_header')
<div class="d-flex justify-content-between align-items-center">
    <h1>Kategori UMKM</h1>

    <a href="{{ route('admin.umkm-category.create') }}"
       class="btn btn-primary">
        <i class="fas fa-plus"></i>
        Tambah Kategori
    </a>
</div>
@stop

@section('content')

<div class="card">

    <div class="card-header">

        <form action="{{ route('admin.umkm-category.index') }}" method="GET">

            <div class="input-group">

                <input
                    type="text"
                    name="search"
                    class="form-control"
                    placeholder="Cari kategori..."
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

                    <th width="70">No</th>

                    <th>Nama Kategori</th>

                    <th>Slug</th>

                    <th width="170">Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse($categories as $category)

                <tr>

                    <td>
                        {{ $loop->iteration + ($categories->firstItem() - 1) }}
                    </td>

                    <td>{{ $category->nama }}</td>

                    <td>
                        <span class="badge bg-info">
                            {{ $category->slug }}
                        </span>
                    </td>

                    <td>

                        <a href="{{ route('admin.umkm-category.edit', $category) }}"
                           class="btn btn-warning btn-sm">

                            <i class="fas fa-edit"></i>

                        </a>

                        <form action="{{ route('admin.umkm-category.destroy', $category) }}"
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

                    <td colspan="4" class="text-center py-3">

                        Belum ada data kategori.

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

    @if($categories->hasPages())

    <div class="card-footer">

        {{ $categories->links() }}

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

        title: 'Hapus kategori?',

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
