@extends('adminlte::page')

@section('title','Edit Berita')

@section('content')

<form
    action="{{ route('admin.berita.update',$news) }}"
    method="POST"
    enctype="multipart/form-data">

    @csrf
    @method('PUT')

    @include('admin.berita.form')

</form>

@stop

@section('js')

<script>

ClassicEditor
.create(document.querySelector('#editor'));

</script>

@stop
