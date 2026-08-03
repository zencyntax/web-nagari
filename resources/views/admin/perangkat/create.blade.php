@extends('adminlte::page')

@section('title', 'Tambah Perangkat')

@section('content_header')
    <h1>Tambah Perangkat</h1>
@stop

@section('content')

<form action="{{ route('admin.perangkat.store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    @include('admin.perangkat.form')

</form>

@stop
