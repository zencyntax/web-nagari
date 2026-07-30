@extends('adminlte::page')

@section('title', 'Edit Perangkat')

@section('content_header')
    <h1>Edit Perangkat</h1>
@stop

@section('content')

<form action="{{ route('admin.perangkat.update', $perangkat) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    @include('admin.perangkat.form')

</form>

@stop
