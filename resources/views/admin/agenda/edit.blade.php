@extends('adminlte::page')

@section('title','Edit Agenda')

@section('content')

<form
    action="{{ route('admin.agenda.update',$agenda) }}"
    method="POST"
    enctype="multipart/form-data">

    @csrf
    @method('PUT')

    @include('admin.agenda.form')

</form>

@stop

@section('js')

<script>

ClassicEditor
.create(document.querySelector('#editor'));

</script>

@stop
