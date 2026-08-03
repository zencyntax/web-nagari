@extends('adminlte::page')

@section('title', 'Data Lembaga')

@section('content_header')
<div class="d-flex justify-content-between align-items-center">
    <h1>Data Lembaga</h1>

    <a href="{{ route('admin.lembaga.create') }}"
       class="btn btn-primary">
        <i class="fas fa-plus"></i>
        Tambah Lembaga
    </a>
</div>
@stop

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="card">

    <div class="card-header">

        <form action="{{ route('admin.lembaga.index') }}"
              method="GET">

            <div class="input-group">

                <input
                    type="text"
                    name="search"
                    class="form-control"
                    placeholder="Cari nama atau ketua..."
                    value="{{ $search }}">

                <button class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>

            </div>

        </form>

    </div>

    <div class="card-body table-responsive p-0">

        <table class="table table-hover">

            <thead>

            <tr>

                <th width="70">No</th>

                <th width="120">Logo</th>

                <th>Nama</th>

                <th>Ketua</th>

                <th>Status</th>

                <th>Urutan</th>

                <th width="170">Aksi</th>

            </tr>

            </thead>

            <tbody>

            @forelse($lembagas as $lembaga)

            <tr>

                <td>
                    {{ $loop->iteration + ($lembagas->firstItem() - 1) }}
                </td>

                <td>

                    @if($lembaga->logo)

                        <img
                            src="{{ asset('storage/'.$lembaga->logo) }}"
                            width="70"
                            class="img-thumbnail">

                    @else

                        -

                    @endif

                </td>

                <td>{{ $lembaga->nama }}</td>

                <td>{{ $lembaga->ketua }}</td>

                <td>

                    @if($lembaga->status)

                        <span class="badge bg-success">
                            Aktif
                        </span>

                    @else

                        <span class="badge bg-danger">
                            Nonaktif
                        </span>

                    @endif

                </td>

                <td>{{ $lembaga->urutan }}</td>

                <td>

                    <a href="{{ route('admin.lembaga.edit',$lembaga) }}"
                       class="btn btn-warning btn-sm">

                        <i class="fas fa-edit"></i>

                    </a>

                    <form
                        action="{{ route('admin.lembaga.destroy',$lembaga) }}"
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

                <td colspan="7" class="text-center">

                    Tidak ada data.

                </td>

            </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <div class="card-footer">

        {{ $lembagas->links() }}

    </div>

</div>

@stop

@section('js')

@if(session('success'))

<script>
Swal.fire({
    type:'success',
    title:'Berhasil',
    text:'{{ session('success') }}'
});
</script>

@endif

<script>

$('.form-delete').submit(function(e){

    e.preventDefault();

    let form=this;

    Swal.fire({

        title:'Hapus data?',

        text:'Data yang dihapus tidak dapat dikembalikan.',

        type:'warning',

        showCancelButton:true,

        confirmButtonText:'Ya, hapus',

        cancelButtonText:'Batal'

    }).then(function(result){

        if(result.value){

            form.submit();

        }

    });

});

</script>

@stop
