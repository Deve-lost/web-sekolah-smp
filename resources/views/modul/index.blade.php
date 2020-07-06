@extends('layouts.master')

@section('title','Modul')

@section('css')
<!-- DataTables -->
<link href="{{asset('admin/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{asset('admin/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="float-right">
                    <button data-target="#tampil" data-toggle="modal" class="btn btn-primary btn-sm">Tambah Data</button>
                </div>
                <h4 class="mt-0 header-title">Modul</h4>
                <br>
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped">
                        <thead>
                        <tr>
                            <th width="10">No</th>
                            <th>Nama Modul</th>
                            <th>Kategori</th>
                            <th width="20">Download</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody class="table-striped">
                        @forelse($neko as $jquin)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $jquin->nama_modul }}</td>
                            <td>{{ ucwords($jquin->kategori) }}</td>
                            <td class="text-center">
                                <a href="{{ route('modul.download', $jquin->id) }}" target="_blank" class="btn btn-sm btn-pink"><i class="ti-download"></i></a>
                            </td>
                            <td>
                                <a href="#" data-target="#editModul" data-toggle="modal" data-id="{{ $jquin->id }}" data-kategori="{{ $jquin->kategori }}" data-nama="{{ $jquin->nama_modul }}" data-path="{{ $jquin->path }}" class="btn btn-warning btn-sm"><i class="ti-pencil"></i></a>
                                <a href="#" onclick="destroy({{ $jquin->id }},'{{ $jquin->nama_modul }}')" class="btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5"><b><i>Tidak Ada Data</i></b></td>
                        </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<!-- Modal -->
<x-modul></x-modul>
<x-editModul></x-editModul>
@stop

@section('footer')
<script src="{{asset('admin/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/pages/datatables.init.js')}}"></script>
<!-- Parsley js -->
<script type="text/javascript" src="{{asset('admin/plugins/parsleyjs/parsley.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.form').parsley();
    });
</script>

<script>
    $().DataTable();
</script>

<x-updateModul></x-updateModul>

<!-- Destroy -->
<script>
    function destroy(id,nama) {
        alertify.confirm("Hapus Modul "+nama+"?", function (ev) {
            ev.preventDefault();
            window.location = "modul/destroy"+ '/' + id;

        }, function(ev) {
            ev.preventDefault();
            alertify.error("Batal!");
        });
    }
</script>
@stop