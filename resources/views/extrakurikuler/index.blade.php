@extends('layouts.master')

@section('title','Extrakurikuler')

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
                    <a href="{{ route('extrakurikuler.create') }}" class="btn btn-sm btn-primary">Tambah Data</a>
                </div>
                <h4 class="mt-0 header-title">Extrakurikuler</h4>
                <br>
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped">
                        <thead>
                        <tr>
                            <th width="10">No</th>
                            <th>Thumbnail</th>
                            <th>Nama Kegiatan</th>
                            <th>Jumlah Anggota</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody class="table-striped">
                        @forelse($neko as $jquin)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ (!$jquin->path) ? asset('no-image.png') : asset('storage/'.$jquin->path) }}" width="80" class="img-thumbnail" alt="thumbnail">
                            </td>
                            <td>{{ $jquin->nama_ek }}</td>
                            <td>{{ $jquin->jml_anggota }} Anggota</td>
                            <td>
                                <a href="{{ route('slug.ek', $jquin->slug) }}" target="_blank" class="btn btn-info btn-sm"><i class="ti-eye"></i></a>
                                <a href="{{ route('extrakurikuler.edit', $jquin->id) }}" class="btn btn-warning btn-sm"><i class="ti-pencil"></i></a>
                                <a href="#" onclick="destroy({{ $jquin->id }})" class="btn btn-danger btn-sm"><i class="ti-trash"></i></a>
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
@stop

@section('footer')
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/pages/datatables.init.js')}}"></script>

<script>
$().DataTable();
</script>

<!-- Destroy -->
<script>
    function destroy(id) {
        alertify.confirm("Hapus Extrakurikuler Ini?", function (ev) {
            ev.preventDefault();
            window.location = "extrakurikuler/destroy"+ '/' + id;

        }, function(ev) {
            ev.preventDefault();
            alertify.error("Batal!");
        });
    }
</script>
@stop