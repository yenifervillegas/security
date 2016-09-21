<?php
require_once("../Model/conexion.php");
require_once("../Model/accesorio.class.php");


$accion=$_REQUEST["action"];
switch ($accion) {
	case 'Guardar'://funcion para guardar usuario 9 lineas de abajo son para capturar los datos;
	
		$nombre=$_POST["nombre"];
		$cantidad=$_POST["cantidad"];

		try{
			Gestion_usuario::Guardar($nombre,$cantidad);
			echo "<script>alert('Guardar con exito');
			location.href = '../Views/registrar.accesorio.php';
			</script>";

		}catch(Exception $e){
			echo $e;
		}
}
?>