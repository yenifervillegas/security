<html>
<head>
	<title></title>
	<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="css/jquery.dataTables.min.css" />
	<link rel="stylesheet" href="css/styleMenu.css" />
	
</head>
<body>


<?php require_once("../Model/conexion.php"); require_once("../Model/usuario.class.php"); ?>

	<center><h1>Registro de Usuarios</h1></center>
	<section class="med">
 			<form  action="../Controller/registro.controller.php" method="post" <?php $rol=Gestion_usuario::cargar_rol(); ?>>
		
						
				<select  name="seleccion">
				  <option value="" disabled selected>Elija Rol de Usuario</option>
						<?php foreach ($rol as $roles): ?>
						  <option value="<?php echo $roles["rol_cod"]?>" ><?php echo $roles["rol_nom"]; ?></option>
						<?php endforeach ?>
				</select>
					   
				<label for="">Nombre</label>
				<input id="" type="text" name="nombre"  required />
					       
					    
				<label for="">Apellido</label>
				<input id="" type="text" name="apellido" class="" required />
				       
				  <label >Tipo de Documento</label>
						<select name="tipodocu">
							<option value="0">seleccionar</option>
							<option value="Cedula">Cedula</option>
							<option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
							<option value="Cedula de extrajero">Cedula de extrajero</option>
							<option value="Pasaporte">Pasaporte</option>
						</select>
							
					  		
				 		<label for="">Numero de Documento</label>
						<input id="" type="number" name="documento" class="" required />
							
						<label for="">Email</label>
	  				<input id="" type="email" name="email" class="" required />
							
	  				<label for="">Telefono</label>
						<input id="" type="number" name="telefono" class="" required />
							
		  			<label for="">Direccion</label>
		  			<input id="" type="text" name="direccion" class="" required />
							
							
						<label for="">Centro</label>
						<input id="" type="text" name="centro" class="" required />
							
						<label for="">Cargo</label>
						<input id="" type="text" name="cargo" class="" required />
							
						<label for="">Contraseña</label>
						<input id="" type="password" name="contrasena" class="" required />
							
					</br>
								<button  value="Guardar" name="action">Guardar</button>
					  
					
				</form>
	 
	</section>

	<section id="consultausu">
		<?php include 'consulta.usuario.php'; ?>
	</section>
</body>
</html>