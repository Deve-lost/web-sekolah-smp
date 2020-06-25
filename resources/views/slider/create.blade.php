@extends('layouts.master')

@section('title','Slider Tambah Data')

@section('css')
<link href="{{asset('admin/plugins/summernote/summernote.css')}}" rel="stylesheet" />
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Tambah Data</h4>
                <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" maxlength="80" class="form-control" name="judul" id="judul" required="" placeholder="Masukkan Judul">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Singkat</label>
                        <input type="text" maxlength="191" class="form-control" name="deskripsi" id="deskripsi" required="" placeholder="Masukkan Deskripsi">
                    </div>

                    <div class="form-group">
                        <label for="path">Thumbnail</label>
                        <input type="file" class="filestyle" name="path" id="path" data-input="false" data-buttonname="btn-secondary btn-sm" required>   
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@stop

@section('footer')
<script src="{{asset('admin/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>
<!-- Parsley js -->
<script type="text/javascript" src="{{asset('admin/plugins/parsleyjs/parsley.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('form').parsley();
    });
</script>
@stop