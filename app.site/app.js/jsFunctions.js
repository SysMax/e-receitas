//Contagem de caracteres.
$(document).ready(function () {
    $('textarea#obs').characterCounter();
    $(".button-collapse").sideNav();
    $('select').material_select();
    $('.datepicker').datepicker();
    
});

// Inicializar DatePicker.
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });

//Botões de comando dos cadastros.
$('.button-collapse').sideNav({
    menuWidth: 290,
    edge: 'right',
    closeOnClick: true,
    draggable: true
});