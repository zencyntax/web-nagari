@extends('adminlte::page')

@section('title','Data Agenda')

@section('content')

<div class="card">

    <div class="card-header">

        <h3 class="card-title">

            Data Agenda

        </h3>

        <div class="card-tools">

            <a
                href="{{ route('admin.agenda.create') }}"
                class="btn btn-primary">

                <i class="fas fa-plus"></i>

                Tambah Agenda

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

                    <th>Lokasi</th>

                    <th width="130">Tanggal</th>

                    <th width="120">Status</th>

                    <th width="170">Aksi</th>

                </tr>

            </thead>

            <tbody>

            @forelse($agendas as $agenda)

                <tr>

                    <td>

                        {{ $loop->iteration }}

                    </td>

                    <td>

                        @if($agenda->thumbnail)

                            <img
                                src="{{ asset('storage/'.$agenda->thumbnail) }}"
                                width="90">

                        @endif

                    </td>

                    <td>

                        {{ $agenda->title }}

                    </td>

                    <td>

                        {{ $agenda->location }}

                    </td>

                    <td>

                        {{ $agenda->date }}

                    </td>

                    <td>

                        @if($agenda->status=='Publish')

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

                        <a
                            href="{{ route('admin.agenda.edit',$agenda) }}"
                            class="btn btn-warning btn-sm">

                            Edit

                        </a>

                        <form
                            action="{{ route('admin.agenda.destroy',$agenda) }}"
                            method="POST"
                            style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Hapus agenda?')">

                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="7" class="text-center">

                        Belum ada agenda.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@stop
