@extends('adminlte::page')

@section('title', 'Tambah UMKM')

@section('content_header')
    <h1>Tambah UMKM</h1>
@stop

@section('content')

<div class="card card-primary">

    <div class="card-header">
        <h3 class="card-title">Form Tambah UMKM</h3>
    </div>

    <form action="{{ route('admin.umkm.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        @include('admin.umkm.form')

    </form>

</div>

@stop
