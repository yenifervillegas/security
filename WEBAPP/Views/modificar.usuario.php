<!-- Andrea T. Villegas -->
<?php
	require_once("../Model/conexion.php");
	require_once("../Model/usuario.class.php");
	$codigo =Gestion_usuario::Consultarusuariocodigo($_GET["codigo_usuario"]);
	/*if ($codigo[1]==1) {
		echo "pasa";
	}*/
?>


	<h1>Modificar usuario</h1>
	<form action="../Controller/registro.controller.php" method="POST">
		<label>Codigo: <?php echo $codigo["usu_cod"]; ?></label>
	<input type="hidden" name="codigo" value=" <?php echo $codigo["usu_cod"]; ?>"/>



	<label>Nombre</label>
	<input type="text" name="nombre" value=" <?php echo $codigo["usu_nom"]; ?>"required/>

	<label>Apellido</label>
	<input type="text" name="apellido" value=" <?php echo $codigo["usu_ape"]; ?>"required/>

	<label >Tipo de Documento</label>
		<select name="tipodocu">
			<option value="0">seleccionar</option>
			<option value="Cedula">Cedula</option>
			<option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
			<option value="Cedula de extrajero">Cedula de extrajero</option>
			<option value="Pasaporte">Pasaporte</option>
		</select>

	<label>Documento</label>
	<input type="text" name="documento" value=" <?php echo $codigo["usu_docu"]; ?>" required/>

	<label>Email</label>
	<input type="email" name="email" value=" <?php echo $codigo["usu_email"]; ?>"required/>

	<label>Telefono</label>
	<input type="text" name="telefono" value=" <?php echo $codigo["usu_tel"]; ?>"/>

	<label>Direccion</label>
	<input type="text" name="direccion" value=" <?php echo $codigo["usu_direc"]; ?>" required/>

	<label>centro</label>
	<input type="text" name="centro" value=" <?php echo $codigo["usu_centro"]; ?>" required/>

	<label>cargo</label>
	<input type="text" name="cargo" value=" <?php echo $codigo["usu_cargo"]; ?>"required/>

	<label>Contraseña</label>
	<input type="password" name="contrasena" value=" <?php echo $codigo["usu_pass"]; ?>"required/>
</br>
	<button name="action" value="Modificar" >Modificar</button>
	<button name="action" value="Cancelar" >Cancelar</button>



</form>
