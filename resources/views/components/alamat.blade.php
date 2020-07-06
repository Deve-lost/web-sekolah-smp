<div id="editAlamat" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('kontak.update') }}" class="form" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                <input type="hidden" id="id" name="id" value="">
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" rows="4" class="form-control" required=""></textarea>
                </div>
               
                <div class="form-group">
                    <label for="no_hp">No. Hp/Wa</label>
                    <input type="number" name="no_hp" id="no_hp" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="embed">Lokasi</label>
                    <textarea name="embed" id="lokasi" rows="4" class="form-control"></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary waves-effect" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-sm btn-primary waves-effect waves-light">Simpan</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->