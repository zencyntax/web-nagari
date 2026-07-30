@extends('adminlte::page')

@section('title', 'Edit UMKM')

@section('content')

<div class="card card-warning">

    <form action="{{ route('admin.umkm.update',$umkm) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        @include('admin.umkm.form')

    </form>

</div>

@include('admin.umkm.gallery.index')

@stop

@section('js')

@include('admin.umkm.gallery.script')

@stop
