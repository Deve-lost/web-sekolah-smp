@extends('layouts.master')

@section('title','Profil Sekolah Edit Data')

@section('css')
<link href="{{asset('admin/plugins/summernote/summernote.css')}}" rel="stylesheet" />
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Edit Data</h4>
                <form action="{{ route('profil-sekolah.update', $jquin->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                        <label for="sub_kategori">Sub Kategori</label>
                        <input type="text" maxlength="191" class="form-control" name="sub_kategori" id="sub_kategori" required="" placeholder="Masukkan Sub Kategori" value="{{ $jquin->sub_kategori }}">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="summernote form-control" required="">{!! $jquin->deskripsi !!}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Thumbnail Sebelumnya</label><br>
                        <img src="{{ asset('storage/'.$jquin->path) }}" style="width: 130px; height: 100px;" alt="thumbnail" class="img-thumbnail">
                        <input type="hidden" name="fileOri" value="{{ $jquin->path }}">
                    </div>

                    <div class="form-group">
                        <label for="path">Thumbnail</label>
                        <input type="file" class="filestyle" name="path" id="path" data-input="false" data-buttonname="btn-secondary btn-sm">
                        <small class="text-info">*Boleh kosong</small>
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