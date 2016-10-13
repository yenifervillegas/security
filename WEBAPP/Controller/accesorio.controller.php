<html>
<head>
	<title></title>
	<script src="../Views/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="../Views/dist/sweetalert.css">
</head>
<body>

</body>
</html>
<?php
require_once("../Model/conexion.php");
require_once("../Model/accesorio.class.php");


$accion=$_REQUEST["action"];
switch ($accion) {
	case 'Guardar'://funcion para guardar usuario 9 lineas de abajo son para capturar los datos;
	
		$codigo_regi=$_POST["codigo_regi"];
		$nombre=$_POST["nombre"];
		$cantidad=$_POST["cantidad"];


		try{
			Gestion_usuario::Guardar($codigo_regi,$nombre,$cantidad);
			echo "<script>
				swal({   title: 'Guardo con Èxito',    
	   			showConfirmButton: true },

	   			function(){   
	   			location.href = '../views/user.php#user.php?seccion=ace';
				});
			</script>";


		}catch(Exception $e){
		echo $e;
	}
	
		break;

		case 'Modificar'://funcion para modificar usuario 9 lineas de abajo son para capturar los datos
	$codigo_acce=$_POST["codigo"];
	$codigo_regi=$_POST["codigo_regi"];
	$nombre=$_POST["nombre"];
	$cantidad=$_POST["cantidad"];

	try{
		Gestion_usuario::Modificar($codigo_acce,$codigo_regi,$nombre,$cantidad);
			echo "<script>
				swal({   title: 'Modifico con Èxito',    
	   			showConfirmButton: true },

	   			function(){   
	   			location.href = '../views/user.php#user.php?seccion=ace';
				});
			</script>";


		}catch(Exception $e){
			echo $e;
		}

		break;

		case 'eliminar':
		$codigoA=$_GET["acce_cod"];

		try{
			Gestion_usuario::eliminar($codigoA);
			echo "<script>
				swal({   title: 'Elimino con Èxito',    
	   			showConfirmButton: true },

	   			function(){   
	   			location.href = '../views/user.php#user.php?seccion=ace';
				});
			</script>";

		}catch(Exception $e){

			echo $e;
		}

		break;

		case 'Cancelar':
		header("location:../Views/user.php#user.php?seccion=ace");
	break;

}
?>