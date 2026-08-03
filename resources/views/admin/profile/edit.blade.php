@extends('adminlte::page')

@section('title', 'Profil Nagari')

@section('content')

<div class="card card-primary">

    <div class="card-header">

        <h3 class="card-title">

            Profil Nagari

        </h3>

    </div>

    <form
        action="{{ route('admin.profile.update') }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf
        @method('PUT')

        @include('admin.profile.form')

    </form>
    
        @include('admin.profile.jorong')
</div>

@include('admin.profile.missions.index')

@stop

@section('js')

@if(session('success'))

<script>

Swal.fire({

    type:'success',

    title:'Berhasil',

    text:'{{ session('success') }}'

});

</script>

@endif

@include('admin.profile.script')
@include('admin.profile.missions.script')

@stop
