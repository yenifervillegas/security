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

				
			break;

			case "regi_pro":
				$("#registrousu").fadeOut();
				$("#fondopan").fadeOut();
				$("#TipodeProducto").fadeOut();
				$("#accesorios").fadeOut();
				$("#entradaysalida").fadeOut();

				$("#registroProducto").fadeIn();

				
			break;

			case "accesorios":
				$("#registrousu").fadeOut();
				$("#fondopan").fadeOut();
				$("#TipodeProducto").fadeOut();
				$("#registroProducto").fadeOut();
				$("#entradaysalida").fadeOut();

				$("#accesorios").fadeIn();

				
			break;

			case "entra_sal":
				$("#registrousu").fadeOut();
				$("#fondopan").fadeOut();
				$("#TipodeProducto").fadeOut();
				$("#registroProducto").fadeOut();
				$("#accesorios").fadeOut();

				$("#entradaysalida").fadeIn();

				
			break;
	}
}

   
 