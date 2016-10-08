 

<?php require_once("../Model/conexion.php"); require_once("../Model/usuario.class.php"); ?>

	 <h1>Registro de Usuarios</h1> 
</br>
<section class="content-form">
	
 			<form  action="../Controller/registro.controller.php" method="post" <?php $rol=Gestion_usuario::cargar_rol(); ?>>
		
						
				<select  name="seleccion" id="seleccion" onchange="seleccionar()">
				  <option value="" disabled selected>Elija Rol de Usuario</option>
						<?php foreach ($rol as $roles): ?>
						  <option value="<?php echo $roles["rol_cod"]?>" ><?php echo $roles["rol_nom"]; ?></option>
						<?php endforeach ?>
				</select>
					   
				<label>Nombre</label>
				<input type="text" name="nombre"  required />
					       
					    
				<label>Apellido</label>
				<input type="text" name="apellido" class="" required />
				       
				  <label >Tipo de Documento</label>
						<select name="tipodocu">
							<option value="0">seleccionar</option>
							<option value="Cedula">Cedula</option>
							<option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
							<option value="Cedula de extrajero">Cedula de extrajero</option>
							<option value="Pasaporte">Pasaporte</option>
						</select>
							
					  		
				<label>Numero de Documento</label>
				<input type="number" name="documento" required />
							
				<label>Email</label>
	  			<input type="email" name="email" required />
							
	  			<label>Telefono</label>
				<input type="number" name="telefono"  required />
							
		  		<label for="">Direccion</label>
		  		<input id="" type="text" name="direccion" required />
							
							
				<label class="centro" >Centro</label>
				<input class="centro" id="centros"  type="text" name="centro" value="calatrava" required />
							
				<label class="cargo">Cargo</label>
				<input class="cargo"  id="cargos" type="text" name="cargo" value="vigilante" required />
							
				<label class="contrasena">Contraseña</label>
				<input class="contrasena" id="contrasena"  type="password" name="contrasena" value="123" required />
							
			    </br>
			    <button  value="Guardar" name="action">Guardar</button>
				
	        </form>
	 
	    </section>

<section class="content-table">
	<?php include 'consulta.usuario.php'; ?>
</section>
 