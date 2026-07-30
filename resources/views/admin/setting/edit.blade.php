@extends('adminlte::page')

@section('title', 'Pengaturan Website')

@section('content')

<div class="card card-primary">

    <form
        action="{{ route('admin.setting.update') }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf
        @method('PUT')

        @include('admin.setting.form')

    </form>

</div>

@stop

@section('js')

@if(session('success'))

<script>

Swal.fire({

    type: 'success',

    title: 'Berhasil',

    text: '{{ session('success') }}'

});

</script>

@endif

@include('admin.setting.script')

@stop
