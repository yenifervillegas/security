<?php require_once("../Model/conexion.php"); require_once("../Model/usuario.class.php"); ?>
<section>
	<center><h5>Registro de Vigilantes y Administradores</h5></center>
		<div class="row">
 			<form class="col s10" action="../Controller/registro.controller.php" method="post" <?php $rol=Gestion_usuario::cargar_rol(); ?>>
				  <div class="row">
						<div class="input-field col s7">
							<i class="material-icons prefix teal-text">people</i>
					 		<select class="icons" name="seleccion">
					 	    <option value="" disabled selected>Elija Rol de Usuario</option>
					 			<?php foreach ($rol as $roles): ?>
					 		  <option value="<?php echo $roles["rol_cod"]?>" data-icon="images/user.png" class="left circle"><?php echo $roles["rol_nombre"]; ?></option>
					 			<?php endforeach ?>
					 		</select>
					    <label>Administrador y/o Vigilante</label>
					  </div>

						<div class="input-field col s6">
				       <i class="material-icons prefix grey-text">account_circle</i>
				       <input id="icon_prefix" type="text" name="nombre" class="validate" required>
				       <label for="icon_prefix">Nombre</label>
				    </div>
				    <div class="input-field col s6">
				       <i class="material-icons prefix grey-text">person_outline</i>
				       <input id="icon_telephone" type="text" name="apellido" class="validate" required>
				       <label for="icon_telephone">Apellido</label>
				    </div>
					  <div class="input-field col s6">
					 		 <i class="material-icons prefix grey-text">credit_card</i>
							 <input id="email" type="number" name="documento" class="validate" required>
							 <label for="email">Cedula</label>
	  				</div>
						<div class="input-field col s6">
							 <i class="material-icons prefix grey-text">phone_android</i>
							 <input id="email" type="number" name="telefono" class="validate" required>
							 <label for="email">Telefono</label>
		  			</div>
						<div class="input-field col s6">
							 <i class="material-icons prefix grey-text">email</i>
							 <input id="email" type="email" name="email" class="validate" required>
							 <label for="email">Email</label>
						</div>
					  <div class="input-field col s6">
							 <i class="material-icons prefix">verified_user</i>
							 <input id="email" type="text" name="nombredeusuario" class="validate" required>
							 <label for="email">Usuario</label>
						</div>
					  <div class="input-field col s6">
							 <i class="material-icons prefix">vpn_key</i>
							 <input id="email" type="password" name="contrasena" class="validate" required>
							 <label for="email">Contraseña</label>
						</div>
				    </div>
						<div class="col s7">
								<button class="waves-effect waves-light btn teal right thin" value="Guardar" name="action">Guardar</button>
					  </div>
					</div>
				</form>
	  	</div>
	</section>

	<section>
		<?php include 'consulta.usuario.php'; ?>
	</section>
