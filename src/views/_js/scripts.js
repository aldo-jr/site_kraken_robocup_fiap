$('#galerryModal').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  var title = button.data('title');
  var image = button.data('image');
  var modal = $(this);

  modal.find('.modal-title').text(title);
  modal.find('.modal-body img').attr("src",image);
});