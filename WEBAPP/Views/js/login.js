$(document).ready(function() {

  $("[data-toggle]").click(function() {
    var toggle_el = $(this).data("toggle");
    $(toggle_el).toggleClass("open-sidebar");



  }); 
// cargar();

 url();    


$("#lirol").click(function(){

		$("#fondopan").fadeOut();
		$(".contenendor").fadeIn();

		$(".contenendor").load("registro.rol.php");
	});

$("#liUsuario").click(function(){
		$("#fondopan").fadeOut();
		$(".contenendor").fadeIn();

		$(".contenendor").load("registro.usuario.php");
	});


	$("#liproducto").click(function(){

		$("#fondopan").fadeOut(); 
		$(".contenendor").fadeIn();

		$(".contenendor").load("registro.tipoproducto.php");
	});

	$("#liregiproducto").click(function(){

		$("#fondopan").fadeOut();
		$(".contenendor").fadeIn();

		$(".contenendor").load("registro.registro_producto.php");
	});

	$("#liaccesorio").click(function(){

		$("#fondopan").fadeOut();
		$(".contenendor").fadeIn();

		$(".contenendor").load("registrar.accesorio.php");
	});


	$("#lientrasal").click(function(){

		$("#fondopan").fadeOut();
		$(".contenendor").fadeIn();
		
		$(".contenendor").load("consulta.entrada_salida.php");
	});
	

});





 function ingresar(){
 	$("#fondo").fadeIn();
   	//location.href = "../Controller/registro.controller.php?codigo_usuario="+usucod+"&action=estado"
}
 function cerrar(){
 	$("#fondo").fadeOut();
   	
}

function sesion(){
	location.href="../Controller/login.controller.php?action=sesion";

}


function url(){

	var URLhash = window.location.hash;

	if (URLhash=="#user.php?seccion=usu") {
		$("#fondopan").fadeOut();
		$(".contenendor").load("registro.usuario.php");
	}
	if (URLhash=="#user.php?seccion=tipo") {
		$("#fondopan").fadeOut();
		$(".contenendor").load("registro.tipoproducto.php");
	}

	if (URLhash=="#user.php?seccion=pro") {
		$("#fondopan").fadeOut();
		$(".contenendor").load("registro.registro_producto.php");
	}

	
	if (URLhash=="#user.php?seccion=ace") {
		$("#fondopan").fadeOut();
		$(".contenendor").load("registrar.accesorio.php");
		
	}
	if (URLhash=="#user.php?seccion=consul") {
		$("#fondopan").fadeOut();
		$(".contenendor").load("consulta.entrada_salida.php");
	}
	if (URLhash=="#user.php?seccion=rol") {
		$("#fondopan").fadeOut();
		$(".contenendor").load("registro.rol.php");
	}
	

}




function seleccionar(){
	condicion=$("#seleccion").val();

	if(condicion == 1)
	{
		$(".centro").fadeOut();
		$(".cargo").fadeOut();
		$("#centros").val("calatrava");
		$("#cargos").val("vigilante");
		
		$(".contrasena").fadeIn();
		
	}else{
		$(".contrasena").fadeOut();
		$("#contrasena").val("1");

		$(".centro").fadeIn();
		$(".cargo").fadeIn();
	}
}
 	function menu(Vvar){
		switch(Vvar){
			

			case "inicio":
				$(".content-form").fadeOut();
				$(".content-table").fadeOut();
				$(".contenendor").fadeOut();

				$("#fondopan").fadeIn();

				
			break;

			
	}
}


