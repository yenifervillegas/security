<?php
include_once("../Model/conexion.php");
include_once("../Model/usuario.class.php");


$consultDocuc=Gestion_usuario::consultardoculike($_POST["vlparam2"]);

foreach ($consultDocuc as $key) {
	echo $key["usu_docu"];
}

	
?>