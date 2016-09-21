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
			Gestion_usuario::Guardar($nombre,$cantidad,$codigo_regi);
			echo "<script>alert('Guardar con exito');
			location.href = '../Views/registrar.accesorio.php';
			</script>";

		}catch(Exception $e){
		echo $e;
	}
	
		break;

		case 'modificar'://funcion para modificar usuario 9 lineas de abajo son para capturar los datos

	$codigo_regi=$_POST["codigo_regi"];
	$nombre=$_POST["nombre"];
	$cantidad=$_POST["cantidad"];

	try{
		Gestion_producto::modificar($nombre,$cantidad,$codigo_regi);
			echo "<script>alert('Modifico  con exito');
			location.href = '../Views/registrar.accesorio.php';
			</script>";
		}catch(Exception $e){
			echo $e;
		}

		break;

		case 'eliminar':
		$codigoE=$_GET["codigo"];

		try{
			Gestion_producto::eliminar($codigoA);
			echo "<script>alert('Elimino con exito');
			location.href = '../Views/registrar.accesorio.php';
			</script>";
		}catch(Exception $e){

			echo $e;
		}

		break;
}
?>