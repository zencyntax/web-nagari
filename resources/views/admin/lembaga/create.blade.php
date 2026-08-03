@extends('adminlte::page')

@section('title', 'Tambah Lembaga')

@section('content_header')
    <h1>Tambah Lembaga</h1>
@stop

@section('content')

<form action="{{ route('admin.lembaga.store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    @include('admin.lembaga.form')

</form>

@stop
