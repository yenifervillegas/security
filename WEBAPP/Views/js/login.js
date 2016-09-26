$(document).ready(function() {
  $("[data-toggle]").click(function() {
    var toggle_el = $(this).data("toggle");
    $(toggle_el).toggleClass("open-sidebar");

  }); 
  cargar();
});

 function ingresar(){
 	$("#fondo").fadeIn();
   	//location.href = "../Controller/registro.controller.php?codigo_usuario="+usucod+"&action=estado"
}
 function cerrar(){
 	$("#fondo").fadeOut();
   	
}
function sesion(){
	location.href="../Controller/login.controller.php?action=session";

}


function cargar(){
	$("#liUsuario").click(function(){
		$("#registrousu").load("registro.usuario.php");
	});

	$("#liproducto").click(function(){
		$("#TipodeProducto").load("registro.tipoproducto.php");
	});

	$("#liregiproducto").click(function(){
		$("#registroProducto").load("registro.registro_producto.php");
	});

	$("#liaccesorio").click(function(){
		$("#accesorios").load("registrar.accesorio.php");
	});

	$("#lientrasal").click(function(){
		$("#entradaysalida").load("consulta.entrada_salida.php");
	});
	url();
}

function url(){

	var URLhash = window.location.hash;
	if (URLhash=="#user.php?seccion=usu") {
		menu('regi_usu');
	}
	if (URLhash=="#user.php?seccion=tipo") {
		menu('tipo_pro');
	}

	if (URLhash=="#user.php?seccion=pro") {
		menu('regi_pro');
	}

	
	if (URLhash=="#user.php?seccion=ace") {
		
		menu('accesorios');
	}
	if (URLhash=="#user.php?seccion=consul") {
		menu('entra_sal');
	}

}

 	function menu(Vvar){
		switch(Vvar){
			case "regi_usu":

				$("#fondopan").fadeOut();
				$("#registrousu").fadeOut();
				$("#TipodeProducto").fadeOut();
				$("#registroProducto").fadeOut();
				$("#accesorios").fadeOut();
				$("#entradaysalida").fadeOut();
				$("#registrousu").load("registro.usuario.php");
				$("#registrousu").fadeIn();
			break;

			case "inicio":
				$("#registrousu").fadeOut();
				$("#TipodeProducto").fadeOut();
				$("#registroProducto").fadeOut();
				$("#accesorios").fadeOut();
				$("#entradaysalida").fadeOut();

				$("#fondopan").fadeIn();

				
			break;

			case "tipo_pro":
				$("#registrousu").fadeOut();
				$("#fondopan").fadeOut();
				$("#registroProducto").fadeOut();
				$("#accesorios").fadeOut();
				$("#entradaysalida").fadeOut();

				$("#TipodeProducto").fadeIn();
				$("#TipodeProducto").load("registro.tipoproducto.php");
				
			break;

			case "regi_pro":
				$("#registrousu").fadeOut();
				$("#fondopan").fadeOut();
				$("#TipodeProducto").fadeOut();
				$("#accesorios").fadeOut();
				$("#entradaysalida").fadeOut();

				$("#registroProducto").fadeIn();
				$("#registroProducto").load("registro.registro_producto.php");
				
			break;

			case "accesorios":
			
				$("#registrousu").fadeOut();
				$("#fondopan").fadeOut();
				$("#TipodeProducto").fadeOut();
				$("#registroProducto").fadeOut();
				$("#entradaysalida").fadeOut();

				$("#accesorios").fadeIn();
				$("#accesorios").load("registrar.accesorio.php");
				
			break;

			case "entra_sal":
				$("#registrousu").fadeOut();
				$("#fondopan").fadeOut();
				$("#TipodeProducto").fadeOut();
				$("#registroProducto").fadeOut();
				$("#accesorios").fadeOut();

				$("#entradaysalida").fadeIn();
				$("#entradaysalida").load("consulta.entrada_salida.php");
				
			break;
	}
}

   
 