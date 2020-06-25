@extends('layouts.master')

@section('title','Extrakurikuler Edit Data')

@section('css')
<link href="{{asset('admin/plugins/summernote/summernote.css')}}" rel="stylesheet" />
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Tambah Data</h4>
                <form action="{{ route('extrakurikuler.update', $jquin->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                        <label for="nama_ek">Nama Kegiatan</label>
                        <input type="text" maxlength="50" class="form-control" name="nama_ek" id="nama_ek" required="" placeholder="Masukkan Nama Kegiatan" value="{{ $jquin->nama_ek }}">
                    </div>

                    <div class="form-group">
                        <label for="jml_anggota">Jumlah Anggota</label>
                        <input type="number" maxlength="11" class="form-control" name="jml_anggota" id="jml_anggota" required="" placeholder="Masukkan Jumlah Anggota" value="{{ $jquin->jml_anggota }}">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Kegiatan</label>
                        <textarea name="deskripsi" id="deskripsi" class="summernote form-control" required="">{{ $jquin->deskripsi }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Thumbnail Sebelumnya</label><br>
                        <img src="{{ (!$jquin->path) ? asset('no-image.png') : asset('storage/'.$jquin->path) }}" style="width: 130px; height: 100px;" alt="thumbnail" class="img-thumbnail">
                        <input type="hidden" name="fileOri" value="{{ $jquin->path }}">
                    </div>

                    <div class="form-group">
                        <label for="path">Thumbnail</label>
                        <input type="file" class="filestyle" name="path" id="path" data-input="false" data-buttonname="btn-secondary btn-sm">   
                        <code class="highlighter-rouge">*Boleh kosong</code>
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
<!--Summernote js-->
<script src="{{asset('admin/plugins/summernote/summernote.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('form').parsley();
    });
</script>

<script>
    jQuery(document).ready(function(){
        $('.summernote').summernote({
            height: 300,                 // Tinggi Editor
            minHeight: null,             // Mai tinggi editor
            maxHeight: null,             // Max tinggi editor
            focus: true                 // set focus edittable
        });
    });
</script>
@stop