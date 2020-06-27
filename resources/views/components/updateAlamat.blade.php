<script>
    $('#editAlamat').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var id = button.data('id')
      var alamat = button.data('alamat')
      var nohp = button.data('nohp')
      var email = button.data('email')
      var lokasi = button.data('lokasi')

      var modal = $(this)
      
      modal.find('.modal-body #id').val(id);
      modal.find('.modal-body #alamat').val(alamat);
      modal.find('.modal-body #no_hp').val(nohp);
      modal.find('.modal-body #email').val(email);
      modal.find('.modal-body #lokasi').val(lokasi);
    })
</script>