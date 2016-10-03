


	<!-- Formulario: Guardar tipo de producto -->
<section class="containerTipo">


	<h2>Guardar tipo  producto</h2>
	<form action="../Controller/tipoproducto.controller.php" method="POST">
		
		<label>Nombre del tipo de producto</label>
			<input type="text" name="txt_tipopronom"/></br>

		<label>Marca</label>
			<input type="text" name="txt_desctipopro"></br>

		<button name="action" value="create">Guardar</button>
		
	</form>

</section>
<section id="conte_consu">
    <?php include 'consulta.tipoproducto.php'; ?>
 </section>
 