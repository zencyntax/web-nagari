@extends('adminlte::page')

@section('title','Edit Kategori UMKM')

@section('content_header')
<h1>Edit Kategori UMKM</h1>
@stop

@section('content')

<form action="{{ route('admin.umkm-category.update',$umkmCategory) }}"
      method="POST">

    @csrf
    @method('PUT')

    @include('admin.umkm-category.form')

</form>

@stop
