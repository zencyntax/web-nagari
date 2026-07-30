@extends('adminlte::page')

@section('title','Tambah Kategori UMKM')

@section('content_header')
<h1>Tambah Kategori UMKM</h1>
@stop

@section('content')

<form action="{{ route('admin.umkm-category.store') }}"
      method="POST">

    @csrf

    @include('admin.umkm-category.form')

</form>

@stop
