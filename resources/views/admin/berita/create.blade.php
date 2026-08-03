@extends('adminlte::page')

@section('title','Tambah Berita')

@section('content')

<form
    action="{{ route('admin.berita.store') }}"
    method="POST"
    enctype="multipart/form-data">

    @csrf

    @include('admin.berita.form')

</form>

@stop

@section('js')

<script>

ClassicEditor
.create(document.querySelector('#editor'));

</script>

@stop
