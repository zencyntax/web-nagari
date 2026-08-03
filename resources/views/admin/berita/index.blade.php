@extends('adminlte::page')

@section('title','Data Berita')

@section('content')

<div class="card">

    <div class="card-header">

        <h3 class="card-title">

            Data Berita

        </h3>

        <div class="card-tools">

            <a
                href="{{ route('admin.berita.create') }}"
                class="btn btn-primary">

                <i class="fas fa-plus"></i>

                Tambah Berita

            </a>

        </div>

    </div>

    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead>

                <tr>

                    <th width="60">No</th>

                    <th width="120">Thumbnail</th>

                    <th>Judul</th>

                    <th width="120">Status</th>

                    <th width="170">Tanggal Publish</th>

                    <th width="170">Aksi</th>

                </tr>

            </thead>

            <tbody>

            @forelse($news as $item)

                <tr>

                    <td>

                        {{ $loop->iteration }}

                    </td>

                    <td>

                        @if($item->thumbnail)

                            <img
                                src="{{ asset('storage/'.$item->thumbnail) }}"
                                width="90">

                        @endif

                    </td>

                    <td>

                        {{ $item->title }}

                    </td>

                    <td>

                        @if($item->status=='Publish')

                            <span class="badge badge-success">

                                Publish

                            </span>

                        @else

                            <span class="badge badge-secondary">

                                Draft

                            </span>

                        @endif

                    </td>

                    <td>

                        {{ $item->published_at }}

                    </td>

                    <td>

                        <a
                            href="{{ route('admin.berita.edit',$item) }}"
                            class="btn btn-warning btn-sm">

                            Edit

                        </a>

                        <form
                            action="{{ route('admin.berita.destroy',$item) }}"
                            method="POST"
                            style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Hapus berita?')">

                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="6" class="text-center">

                        Belum ada berita.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

        <div class="mt-3">

            {{ $news->links() }}

        </div>

    </div>

</div>

@stop
