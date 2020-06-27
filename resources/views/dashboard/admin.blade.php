@extends('layouts.master')

@section('title','Dashboard Admin')

@section('content')
<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card text-center m-b-30">
            <div class="mb-2 card-body text-muted">
                <h3 class="text-purple">{{ $mG }}</h3>
                Total Modul Guru
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card text-center m-b-30">
            <div class="mb-2 card-body text-muted">
                <h3 class="text-info">{{ $mS }}</h3>
                Total Modul Siswa
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card text-center m-b-30">
            <div class="mb-2 card-body text-muted">
                <h3 class="text-primary">{{ $ek }}</h3>
                Total Extrakurikuler
            </div>
        </div>
    </div>
</div>
@stop

@section('footer')

@stop