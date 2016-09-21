<!-- Andrea taborda -->
<?php
date_default_timezone_get("America/Bogota");
session_start();
require_once("../Model/conexion.php");
require_once("../Model/registro.producto.class.php");

$accion=$_REQUEST["action"];
switch ($accion) {
	case 'Guardar':

	$codigo_usu=$_POST["codigo_usu"];
	$codigo_produ=$_POST["codigo_produ"];
	$registro_serial=$_POST["registro_serial"];
	$registre_color=$_POST["registre_color"];
	$registre_fecha=$_POST["registre_fecha"];
	$registre_decrip=$_POST["registre_decrip"];
	$registre_autoalerta=$_POST["registre_autoalerta"];
	$registre_cantidad=$_POST["registre_cantidad"];
	$fecha=date("y-m-d");
	$hora=date("H:i");

	try{


		Gestion_producto::Guardar($codigo_usu,$codigo_produ,$registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta,$registre_cantidad,$fecha,$hora);
		echo "<script>alert('Guardar con exito');
			location.href = '../Views/registro.registro_producto.php';
			</script>";

	}catch(Exception $e){
		echo $e;
	}
	
		break;

		case 'modificar'://funcion para modificar usuario 9 lineas de abajo son para capturar los datos

	$codigo_regi=$_POST["codigo_regi"];
	$codigo_usu=$_POST["codigo_usu"];
	$codigo_produ=$_POST["codigo_produ"];
	$registro_serial=$_POST["regi_serial"];
	$registre_color=$_POST["regi_color"];
	$registre_fecha=$_POST["regi_fecha"];
	$registre_decrip=$_POST["regi_desc"];
	$registre_autoalerta=$_POST["regi_autoalerta"];
	$registre_cantidad=$_POST["regi_cantidad"];

	try{
		Gestion_producto::modificar($codigo_regi,$codigo_usu,$codigo_produ,$registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta,$registre_cantidad);
			echo "<script>alert('Modifico  con exito');
			location.href = '../Views/registro.registro_producto.php';
			</script>";
		}catch(Exception $e){
			echo $e;
		}

		break;



		case 'eliminar':
		$codigoA=$_GET["codigo_produc"];

		try{
			Gestion_producto::eliminar($codigoA);
			echo "<script>alert('Elimino con exito');
			location.href = '../Views/registro.registro_producto.php';
			</script>";
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
