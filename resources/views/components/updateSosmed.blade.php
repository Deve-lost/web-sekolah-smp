<script>
    $('#editSosmed').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var id = button.data('id')
      var nama = button.data('nama')
      var icon = button.data('icons')
      var url = button.data('url')

      var modal = $(this)
      
      modal.find('.modal-body #id').val(id);
      modal.find('.modal-body #nm_kontak').val(nama);
      modal.find('.modal-body #icons').val(icon);
      modal.find('.modal-body #urls').val(url);
    })
</script>