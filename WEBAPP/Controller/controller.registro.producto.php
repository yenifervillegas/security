<!-- Andrea taborda -->
<?php
date_default_timezone_get("America/Bogota");
session_start();
require_once("../Model/conexion.php");
require_once("../Model/registro.producto.class.php");

$accion=$_REQUEST["action"];
switch ($accion) {
	case 'Guardar':
	$codigo=$_POST["codigo"];
	$codigo_pro=$_POST["codigo_pro"];
	$registro_serial=$_POST["registro_serial"];
	$registre_color=$_POST["registre_color"];
	$registre_fecha=$_POST["registre_fecha"];
	$registre_decrip=$_POST["registre_decrip"];
	$registre_autoalerta=$_POST["registre_autoalerta"];
	$registre_cantidad=$_POST["registre_cantidad"];
	$fecha=date("o-m-d");
	$hora=date("H:i");

	try{

		Gestion_producto::Guardar($codigo,$codigo_pro,$codigo_propiedad,$registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta,$registre_cantidad,$fecha,$hora);
		echo "<a href='../Views/dashboard.php?seccion=rr_producto'>Volver</a>";
		//header("location:../Views/dashboard.php?seccion=rr_producto");
	}catch(Exception $e){
		echo $e;
	}
	echo"<script>alert('guardo con exito'); </script>";
		break;

		case 'modificar'://funcion para modificar usuario 9 lineas de abajo son para capturar los datos


	$registro_serial=$_POST["regi_serial"];
	$registre_color=$_POST["regi_color"];
	$registre_fecha=$_POST["regi_fecha"];
	$registre_decrip=$_POST["regi_desc"];
	$registre_autoalerta=$_POST["regi_autoalterna"];
	$registre_cantidad=$_POST["regi_cantidad"];

try{
			Gestion_producto::modificar($registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta,$registre_cantidad);
			header("location:../views/consulta.registro_producto.php");

		}catch(Exception $e){
			echo $e;
		}

		break;



		case 'eliminar':
		$codigoA=$_GET["codigo_produc"];

		try{
			Gestion_producto::eliminar($codigoA);
			echo "<script>alert('elimino con exito');</script>";
			echo "<a href='../Views/consulta.registro_producto.php'>Volver</a>";
		}catch(Exception $e){

			echo $e;
		}


		break;


	case 'salidae':

		$codigo=$_GET["salidas"];
		$fecha=date("o-m-d");
		$hora=date("H:i");
		try{
			Gestion_producto::entrada_salida($codigo,$fecha,$hora);
			header("location:../views/consulta.entrada_salida.php");

		}catch(Exception $e){
			echo $e;
		}

	break;




}


?>
