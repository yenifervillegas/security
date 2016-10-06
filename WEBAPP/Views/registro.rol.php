	<!-- Formulario: Guardar rol -->

<section>
	<form action="../Controller/guardarrol.php" method="post">
			<center><h4 class="thin">Registro de Rol</h4></center>
			
			<label for="nom">Nombre</label>
			<input type="text" name="txt_nomrol" id="nom" class="validate" required>
					
		
			<button type="submit" value="Guardar" class="btn thin teal" name="action">Guardar</button>
	</form>
</section>

<section>
	<?php include 'consulta.rol.php'; ?>
</section>
