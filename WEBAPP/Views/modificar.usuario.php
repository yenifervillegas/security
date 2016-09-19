<!-- Andrea T. Villegas -->
<?php
	require_once("../Model/conexion.php");
	require_once("../Model/usuario.class.php");
	$codigo =Gestion_usuario::Consultarusuariocodigo($_GET["codigo_usuario"]);

?>


	<h1>Modificar usuario</h1>
	<form action="../Controller/registro.controller.php" method="POST">
		<label>Codigo: <?php echo $codigo["usu_cod"]; ?></label>
	<input type="hidden" name="codigo" value=" <?php echo $codigo["usu_cod"]; ?>"/>

	<label>Documento</label>
	<input type="text" name="documento" value=" <?php echo $codigo["usu_docu"]; ?>" required/>

	<label>Nombre</label>
	<input type="text" name="nombre" value=" <?php echo $codigo["usu_nom"]; ?>"required/>

	<label>Apellido</label>
	<input type="text" name="apellido" value=" <?php echo $codigo["usu_ape"]; ?>"required/>

	<label>Email</label>
	<input type="email" name="email" value=" <?php echo $codigo["usu_email"]; ?>"required/>

	<label>Telefono</label>
	<input type="text" name="telefono" value=" <?php echo $codigo["usu_tel"]; ?>"/>

	<label>Nombre de Usuario</label>
	<input type="text" name="nombredeusuario" value=" <?php echo $codigo["usu_nick"]; ?>"required/>

	<label>Contraseña</label>
	<input type="password" name="contrasena" value=" <?php echo $codigo["usu_pass"]; ?>"required/>

	<button value="Modificar" name="action">Modificar</button>



</form>
