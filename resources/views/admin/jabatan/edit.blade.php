@extends('adminlte::page')

@section('title', 'Edit Jabatan')

@section('content_header')
    <h1>Edit Jabatan</h1>
@stop

@section('content')

<div class="card">

    <div class="card-body">

        <form action="{{ route('admin.jabatan.update', $jabatan) }}" method="POST">

            @csrf
            @method('PUT')

            @include('admin.jabatan.form')

        </form>

    </div>

</div>

@stop
