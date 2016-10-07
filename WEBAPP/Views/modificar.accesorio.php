<?php
	require_once("../Model/conexion.php");
	require_once("../Model/accesorio.class.php");
	$codigo =Gestion_usuario::Consultaracce($_GET["acce_cod"]);

?>
<section class="content-form">

	<h1>Modificar usuario</h1>
	<form action="../Controller/accesorio.controller.php" method="POST">

	<label>Codigo: <?php echo $codigo["acce_cod"]; ?></label>
	<input type="hidden" name="codigo" value=" <?php echo $codigo["acce_cod"]; ?>"/>

	<label>Codigo<?php echo $codigo["regi_cod"]; ?></label>
	<input type="hidden" name="codigo_regi" value=" <?php echo $codigo["regi_cod"]; ?>"/>


	<label>Nombre</label>
	<input type="text" name="nombre" value=" <?php echo $codigo["acce_nom"]; ?>" required/>

	<label>Cantidad</label>
	<input type="text" name="cantidad" value=" <?php echo $codigo["acce_cantidad"]; ?>"required/>

	<button name="action" value="Modificar" >Modificar</button>
	<button name="action" value="Cancelar" >Cancelar</button>
</section>