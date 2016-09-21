	<!-- Formulario: Guardar tipo de producto -->
<div class="container">


	<h2>Guardar tipo de prducto</h2>
	<form action="../Controller/tipoproducto.controller.php" method="POST">
		
		<label>Nombre del tipo de producto</label>
			<input type="text" name="txt_tipopronom"/></br>

		<label>Marca</label>
			<input type="text" name="txt_desctipopro"></br>

		<button name="action" value="create">Guardar</button>
		
	</form>
<section >
    <?php include 'consulta.tipoproducto.php'; ?>
  </section>
</div>
 
	