





const $ = require('jquery');
// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
require('bootstrap');

require('@fortawesome/fontawesome-free/css/all.min.css');
require('@fortawesome/fontawesome-free/js/all.js');


$(document).ready(function() {
    $('[data-toggle="popover"]').popover();

    $(".alert").delay(4000).slideUp(200, function() {
        $(this).alert('close');
    });

    $('#btnSave').on('click', function (  ) {
        $('#formBtnSave').trigger("click");
    })

    $('#btnRemove').on('click', function (  ) {
        $('#formBtnRemove').trigger("click");
    })
});
