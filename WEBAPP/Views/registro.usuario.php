<?php require_once("../Model/conexion.php"); require_once("../Model/usuario.class.php"); ?>
<section>
	<center><h5>Registro de Usuarios</h5></center>
		<div class="row">
 			<form class="col s10" action="../Controller/registro.controller.php" method="post" <?php $rol=Gestion_usuario::cargar_rol(); ?>>
				<div class="row">
						
				<select class="icons" name="seleccion">
				  <option value="" disabled selected>Elija Rol de Usuario</option>
						<?php foreach ($rol as $roles): ?>
						  <option value="<?php echo $roles["rol_cod"]?>" ><?php echo $roles["rol_nom"]; ?></option>
						<?php endforeach ?>
					 		</select>
					   
				<label for="icon_prefix">Nombre</label>
				<input id="icon_prefix" type="text" name="nombre" class="validate" required>
					       
					    
				<label for="icon_telephone">Apellido</label>
				<input id="icon_telephone" type="text" name="apellido" class="validate" required>
				       
				  <label >Tipo de Documento</label>
						<select name="tipodocu">
							<option value="0">seleccionar</option>
							<option value="Cedula">Cedula</option>
							<option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
							<option value="Cedula de extrajero">Cedula de extrajero</option>
							<option value="Pasaporte">Pasaporte</option>
						</select>
							
					  		
				 		<label for="email">Numero de Documento</label>
						<input id="email" type="number" name="documento" class="validate" required>
							
						<label for="email">Email</label>
	  				<input id="email" type="email" name="email" class="validate" required>
							
	  				<label for="email">Telefono</label>
						<input id="email" type="number" name="telefono" class="validate" required>
							
		  			<label for="email">Direccion</label>
		  			<input id="email" type="text" name="direccion" class="validate" required>
							
							
						<label for="email">Centro</label>
						<input id="email" type="text" name="centro" class="validate" required>
							
						<label for="email">Cargo</label>
						<input id="email" type="text" name="cargo" class="validate" required>
							
						<label for="email">Contraseña</label>
						<input id="email" type="password" name="contrasena" class="validate" required>
							
					<div class="col s7">
								<button  value="Guardar" name="action">Guardar</button>
					  
					</div>
				</form>
	  	</div>
	</section>

	<section>
		<?php include 'consulta.usuario.php'; ?>
	</section>
