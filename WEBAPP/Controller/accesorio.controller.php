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
			echo "<script>alert('Guardar con exito');
			location.href = '../Views/registrar.accesorio.php';
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
			echo "<script>alert('Modifico  con exito');
			location.href = '../Views/registrar.accesorio.php';
			</script>";
		}catch(Exception $e){
			echo $e;
		}

		break;

		case 'eliminar':
		$codigoA=$_GET["acce_cod"];

		try{
			Gestion_usuario::eliminar($codigoA);
			echo "<script>alert('Elimino con exito');
			location.href = '../Views/registrar.accesorio.php';
			</script>";
		}catch(Exception $e){

			echo $e;
		}

		break;
}
?>