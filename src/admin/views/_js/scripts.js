$('#modalConfirma').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  var url = button.data('url')+"/confirma";
  var modal = $(this);

  modal.find('.modal-footer a').attr("href",url);
});