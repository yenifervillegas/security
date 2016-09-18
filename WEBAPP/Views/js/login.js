$(document).ready(function() {
  $("[data-toggle]").click(function() {
    var toggle_el = $(this).data("toggle");
    $(toggle_el).toggleClass("open-sidebar");
  });
});

 function ingresar(){
 	$("#fondo").fadeIn();
   	//location.href = "../Controller/registro.controller.php?codigo_usuario="+usucod+"&action=estado"
}
 function cerrar(){
 	$("#fondo").fadeOut();
   	
}

   
 