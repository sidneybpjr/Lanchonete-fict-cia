$(document).ready(function(){

$.datepicker.setDefaults( $.datepicker.regional[ "pt-BR" ] );


$("#dataDestaque").datepicker({
    minDate: '+1d'
});

$(".btnMenuCelular").click(function(){
   $(".menu-celular").toggle(); 
});

});
