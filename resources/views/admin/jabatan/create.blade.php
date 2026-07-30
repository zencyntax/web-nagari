@extends('adminlte::page')

@section('title', 'Tambah Jabatan')

@section('content_header')
    <h1>Tambah Jabatan</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('admin.jabatan.store') }}" method="POST">

            @csrf

            @include('admin.jabatan.form')

        </form>

    </div>
</div>

@stop
