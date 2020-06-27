<div id="editSosmed" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                    <label for="nama_kontak">Nama Sosmed</label>
                    <input type="text" class="form-control" name="nama_kontak" id="nm_kontak" required="" placeholder="Masukkan Nama Sosmed" max="50">
                </div>

                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="text" class="form-control" name="icon" id="icons" required="" placeholder="Cth: fab fa-instagram" max="20">
                    <small class="text-info">*Dokumentasi icon : <a href=""></a></small>
                </div>

                <div class="form-group">
                    <label for="url">URL</label>
                    <textarea name="url" id="urls" rows="3" class="form-control" placeholder="Cth: https://www.facebook.com/"></textarea>
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