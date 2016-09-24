<!-- Andrea T. -->
<?php
require_once("../Model/conexion.php");
include("../Model/registro.producto.class.php");

$usuario=Gestion_producto::consultarUsu();
$producto=Gestion_producto::consultarprodu();
//$propietario=Gestion_producto::consultarpropie();

?>
<html>
<head>
	<title></title>
</head>
<body>



<section>
<h1>Registro de Productos</h1>
	<form action="../Controller/controller.registro.producto.php" method="post"/>
		


		
		<!--<input name="codigo_produ" type="text" required/>-->

		<label>Codigo de usuario</label>
		<input name="codigo_usu" type="number" required/><!--este si va?,,,, se le cambio el name repetido con el cod prod-->

		<label>Codigo de producto</label>
		<select name="codigo_produ">
			<option>Seleccionar</option>
			<?php
				foreach ($producto as $pd) {
				 	echo "<option value=".$pd["produ_cod"].">".$pd["produ_nom"]."</option>";
				 } 
				
			?>
		</select>

		<label >Registra serial</label>
		<input name="registro_serial" type="text" required/>
	

		<label >Registre color </label>
		<input name="registre_color" type="color" required/>

	
		<label >Registre Fecha </label>
		<input  name="registre_fecha" type="date" required/>
	
		
		<label >Registre descripcion</label>
		<textarea name="registre_decrip" type="text"></textarea>

	
		<label >Registre autoalterna</label>
		<input  name="registre_autoalerta" type="text"/>

		<label >Registre Cantidad del Producto</label>
		<input  name="registre_cantidad" type="number"/>
	
</br>
</br>

		<button name="action"  value="Guardar">Guardar</button>
</form>
</section>

 <section >
    <?php include 'consulta.registro_producto.php'; ?>
  </section>


</body>
</html>