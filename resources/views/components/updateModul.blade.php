<script>
    $('#editModul').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var id = button.data('id')
      var nama = button.data('nama')
      var kategori = button.data('kategori')
      var path = button.data('path')

      var modal = $(this)
      
      modal.find('.modal-body #id').val(id);
      modal.find('.modal-body #nama').val(nama);
      modal.find('.modal-body #kategori').val(kategori);
      modal.find('.modal-body #fileOri').val(path);
    })
</script>