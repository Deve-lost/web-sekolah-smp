@extends('layouts.master')

@section('title','Kontak Alamat')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card m-b-20">
            <div class="card-body">
                <div class="float-right">
                    <a href="#" data-toggle="modal" data-target="#editAlamat" data-id="{{ $jquin->id }}" data-alamat="{{ $jquin->alamat }}" data-lokasi="{{ $jquin->embed }}" data-nohp="{{ $jquin->no_hp }}" data-email="{{ $jquin->email }}" class="btn btn-sm btn-warning"><i class="ti-pencil"></i></a>
                </div>
                <p>Kontak - Alamat</p>
                <hr>
                <dl class="row text-left m-t-20">
                    <dt class="col-sm-5">Alamat</dt>
                    <dd class="col-sm-7">{{ $jquin->alamat }}</dd>

                    <dt class="col-sm-5">No. Hp/Wa</dt>
                    <dd class="col-sm-7">{{ $jquin->no_hp }}</dd>

                    <dt class="col-sm-5">Email</dt>
                    <dd class="col-sm-7">{{ $jquin->email }}</dd>

                    <dt class="col-sm-5">Lokasi</dt>
                    <dd class="col-sm-7">{{ $jquin->embed }}</dd>
                </dl>
            </div>
        </div>
    </div> <!-- end col -->
</div>

<!-- Modal -->
<x-alamat></x-alamat>
@stop

@section('footer')
<script src="{{asset('admin/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>
<!-- Parsley js -->
<script type="text/javascript" src="{{asset('admin/plugins/parsleyjs/parsley.min.js')}}"></script>

<x-updateAlamat></x-updateAlamat>

<script type="text/javascript">
    $(document).ready(function() {
        $('form').parsley();
    });
</script>
@stop