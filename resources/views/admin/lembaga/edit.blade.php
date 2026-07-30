@extends('adminlte::page')

@section('title', 'Edit Lembaga')

@section('content_header')
    <h1>Edit Lembaga</h1>
@stop

@section('content')

<form action="{{ route('admin.lembaga.update', $lembaga) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    @include('admin.lembaga.form')

</form>

@stop
