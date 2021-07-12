$('#deleteItemModal').on('show.bs.modal', function (event) {
    let button = $(event.relatedTarget);
    let url = button.data('url');
    let modal = $(this);
    modal.find('form').attr('action', url);
});
$(document).ready(function () {
    bsCustomFileInput.init();
});
