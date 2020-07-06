@extends('layouts.master')

@section('title','Kontak Sosial Media')

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
                <h4 class="mt-0 header-title">Sosial Media</h4>
                <br>
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped">
                        <thead>
                        <tr>
                            <th width="10">No</th>
                            <th>Nama Sosmed</th>
                            <th>Icon</th>
                            <th>URL</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody class="table-striped">
                        @forelse($neko as $jquin)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $jquin->nama_kontak }}</td>
                            <td>{{ $jquin->icon }}</td>
                            <td>{{ $jquin->url }}</td>
                            <td>
                                <a href="#" data-target="#editSosmed" data-toggle="modal" data-id="{{ $jquin->id }}" data-nama="{{ $jquin->nama_kontak }}" data-icons="{{ $jquin->icon }}" data-url="{{ $jquin->url }}" class="btn btn-warning btn-sm"><i class="ti-pencil"></i></a>
                                <a href="#" onclick="destroy({{ $jquin->id }},'{{ $jquin->nama_kontak }}')" class="btn btn-danger btn-sm"><i class="ti-trash"></i></a>
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
<x-sosmed></x-sosmed>
<x-editsosmed></x-editsosmed>
@stop

@section('footer')
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

<x-updateSosmed></x-updateSosmed>

<!-- Destroy -->
<script>
    function destroy(id,nama) {
        alertify.confirm("Hapus Sosial Media "+nama+"?", function (ev) {
            ev.preventDefault();
            window.location = "kontak/destroy"+ '/' + id;

        }, function(ev) {
            ev.preventDefault();
            alertify.error("Batal!");
        });
    }
</script>
@stop