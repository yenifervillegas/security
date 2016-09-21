<?php
	require_once("../Model/conexion.php");
	require_once("../Model/accesorios.class.php");
	$codigo =Gestion_usuario::Consultarusuariocodigo($_GET["codigo_usuario"]);

?>


	<h1>Modificar usuario</h1>
	<form action="../Controller/accesorio.controller.php" method="POST">

	<label>Codigo: <?php echo $codigo["acce_cod"]; ?></label>
	<input type="hidden" name="codigo" value=" <?php echo $codigo["acce_cod"]; ?>"/>

	<label>Nombre</label>
	<input type="text" name="nombre" value=" <?php echo $nombre["acce_nom"]; ?>" required/>

	<label>Cantidad</label>
	<input type="text" name="cantidad" value=" <?php echo $cantidad["acce_cantidad"]; ?>"required/>