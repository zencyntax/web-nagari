@extends('adminlte::page')

@section('title','Tambah Agenda')

@section('content')

<form
    action="{{ route('admin.agenda.store') }}"
    method="POST"
    enctype="multipart/form-data">

    @csrf

    @include('admin.agenda.form')

</form>

@stop

@section('js')

<script>

ClassicEditor
.create(document.querySelector('#editor'));

</script>

@stop
