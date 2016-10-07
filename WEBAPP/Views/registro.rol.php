	<!-- Formulario: Guardar rol -->

<section class="content-form">
	<form action="../Controller/guardarrol.php" method="post">
			<center><h1 class="thin">Registro de Rol</h1></center>
			
			<label for="nom">Nombre</label>
			<input type="text" name="txt_nomrol" id="nom" class="validate" required>
					
		</br>
			<button type="submit" value="Guardar" class="btn thin teal" name="action">Guardar</button>
			
	</form>
</section>

<section class="content-table">
	<?php include 'consulta.rol.php'; ?>
</section>
