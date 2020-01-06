//Maladie edite modal
$('#edit').on('show.bs.modal', function (event) {
    console.log('Modal opened');
    var button = $(event.relatedTarget);
    var libelle = button.data('mylibelle');
    var id = button.data('id');

    var modal = $(this);
    modal.find('.modal-body #libelle').val(libelle);
    modal.find('.modal-body #id').val(id);
});
