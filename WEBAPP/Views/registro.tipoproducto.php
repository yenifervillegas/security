	<!-- Formulario: Guardar tipo de producto -->
<div class="container">


	<h2>Guardar tipo de prducto</h2>
	<form action="../Controller/tipoproducto.controller.php" method="POST">
		<label>Codigo del tipo de producto</label>
			<input type="text" name="txt_tipoprocod"/></br>
		<label>Nombre del tipo de producto</label>
			<input type="text" name="txt_tipopronom"/></br>
		<label>Descripcion del tipo de producto</label>
			<input type="text" name="txt_desctipopro"></br>
		<button name="accion" value="create" class="btn green">Guardar</button>
		<?php echo @$_REQUEST["$mensaje"];?>
		<?php echo "<a href='dashboard.php?seccion=c_t_producto' class='btn indigo'>Consultar</a>"; ?>
	</form>

</div>
