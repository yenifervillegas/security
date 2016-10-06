<!-- Formulario: Guardar tipo de producto -->
<h1>Registro Tipo Producto</h1>

<section class="content-form">
	<form action="../Controller/tipoproducto.controller.php" method="POST">

		<label>Nombre del tipo de producto</label>
		<input type="text" name="txt_tipopronom"/></br>

		<label>Marca</label>
		<input type="text" name="txt_desctipopro"></br>

		<button name="action" value="create">Guardar</button>	
	</form>
</section>

<section class="content-table">
    <?php include 'consulta.tipoproducto.php'; ?>
</section>
 