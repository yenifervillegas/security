<?php
require_once("../Model/conexion.php");
require_once("../Model/accesorio.class.php");

$action= $_REQUEST["action"];
switch ($action) {
	case 'Guardar'://funcion para guardar usuario 9 lineas de abajo son para capturar los datos
		
		$nombre=$_POST["nombre"]
		$cantidad=$_POST["cantidad"]
		try{
			Gestion_usuario::Guardar($nombre,$cantidad);
			echo "Guardo con exito";

		}catch(Exception $e){
			echo $e;
		}