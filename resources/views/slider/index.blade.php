@extends('layouts.master')

@section('title','Slider')

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
                    <a href="{{ route('slider.create') }}" class="btn btn-sm btn-primary">Tambah Data</a>
                </div>
                <h4 class="mt-0 header-title">Slider</h4>
                <br>
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped">
                        <thead>
                        <tr>
                            <th width="10">No</th>
                            <th>Thumbnail</th>
                            <th>Judul</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody class="table-striped">
                        @forelse($neko as $jquin)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{asset('storage/'.$jquin->path)}}" width="80" class="img-thumbnail" alt="thumbnail">
                            </td>
                            <td>
                                {{ $jquin->judul }}
                            </td>
                            <td>
                                <a href="{{ route('slider.edit', $jquin->id) }}" class="btn btn-sm btn-warning"><i class="ti-pencil"></i></a>
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
<script src="{{asset('admin/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/pages/datatables.init.js')}}"></script>

<script>
    $().DataTable();
</script>

<!-- Destroy -->
<script>
    function destroy(id) {
        alertify.confirm("Hapus Slider Ini?", function (ev) {
            ev.preventDefault();
            window.location = "slider/destroy"+ '/' + id;

        }, function(ev) {
            ev.preventDefault();
            alertify.error("Batal!");
        });
    }
</script>
@stop