@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<div class="row">

    <div class="col-lg-3 col-6">

        <div class="small-box text-bg-success">

            <div class="inner">
                <h3>0</h3>
                <p>Perangkat</p>
            </div>

            <div class="icon">
                <i class="fas fa-users"></i>
            </div>

        </div>

    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box text-bg-primary">

            <div class="inner">
                <h3>0</h3>
                <p>Berita</p>
            </div>

            <div class="icon">
                <i class="fas fa-newspaper"></i>
            </div>

        </div>

    </div>

</div>

@stop
