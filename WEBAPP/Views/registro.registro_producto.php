<!-- Andrea T. -->
<?php
require_once("../Model/conexion.php");
include("../Model/registro.producto.class.php");


$producto=Gestion_producto::consultarprodu();
$cargarusu=Gestion_producto::consultarultimousu();

$fecha=date("Y-m-d");
?>



<section class="content-form">
<h2>Registro de Productos</h2>
	<form action="../Controller/controller.registro.producto.php" method="post">
		
		<!--<input name="codigo_produ" type="text" required/>-->

		<label>Codigo de usuario: <?php echo $cargarusu["usu_docu"]?></label>
		<input name="codigo_usu" type="hidden"  value="<?php echo $cargarusu["usu_docu"]?>"/><!--este si va?,,,, se le cambio el name repetido con el cod prod-->

		<label>Nombre de producto</label>
		<select name="codigo_produ">
			<option>Seleccionar</option>
			<?php
				foreach ($producto as $pd) {
				 	echo "<option value=".$pd["produ_cod"].">".$pd["produ_nom"]." ".$pd["produ_marca"]."</option>";
				 } 
				
			?>
		</select>

		<label >Registra serial</label>
		<input name="registro_serial" type="text" required/>
	

		<label >Registre color </label>
		<input name="registre_color" type="color" required/>

	
		<label>Fecha:</label>
		<input autocomplete='off'  name='registre_fecha' type='date' min='<?php echo $fecha; ?>'class='' id='fecha'>
		
		<label >Registre descripcion</label>
		<textarea name="registre_decrip" type="text"></textarea>

	
		<label >Registre autoalterna</label>
		<input  name="registre_autoalerta" type="text"/>

		<label >Registre Cantidad del Producto</label>
		<input  name="registre_cantidad" type="number" required/>
	
</br>
</br>

		<button name="action"  value="Guardarpro">Guardar</button>
</form>
</section>

 <section class="content-table">
    <?php include 'consulta.registro_producto.php'; ?>
  </section>

