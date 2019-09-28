





const $ = require('jquery');
// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
require('bootstrap');

// or you can include specific pieces
// require('bootstrap/js/dist/tooltip');
// require('bootstrap/js/dist/popover');


$(document).ready(function() {
    $('[data-toggle="popover"]').popover();

    $(".alert").delay(4000).slideUp(200, function() {
        $(this).alert('close');
    });

    $('#btnSave').on('click', function (  ) {
        // $(this).next('form')
        $('#formBtnSave').trigger("click");
    })
});
