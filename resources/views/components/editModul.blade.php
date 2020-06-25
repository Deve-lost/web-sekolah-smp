<div id="editModul" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('modul.update') }}" class="form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="id" value>
                <div class="form-group">
                    <label for="nama">Nama Modul</label>
                    <input type="text" class="form-control" name="nama_modul" id="nama" required="" placeholder="Masukkan Nama Modul">
                </div>

                <div class="form-group">
                    <label for="kategori">Kategori Modul</label>
                    <select name="kategori" id="kategori" class="form-control">
                        <option value="guru">Guru</option>
                        <option value="siswa">Siswa</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="hidden" name="fileOri" id="fileOri" value>
                    <label for="path">File</label>
                    <input type="file" class="filestyle" name="path" id="path" data-input="false" data-buttonname="btn-secondary btn-sm">
                    <code class="highlighter-rouge">*Img,Docx,Pdf</code>
                    <code class="highlighter-rouge">*Boleh kosong</code>
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