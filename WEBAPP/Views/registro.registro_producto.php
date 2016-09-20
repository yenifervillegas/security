<!-- Andrea T. -->
<?php
require_once("../model/conexion.php");
require_once("../model/registro.producto.class.php");

$usuario=Gestion_producto::consultarUsu();
//$producto=Gestion_producto::consultarprodu();
$propietario=Gestion_producto::consultarpropie();

?>

<section>

	<form action="../Controller/controller.registro.producto.php" method="post"/>
		

		<label>Codigo de Registro</label>
		<input name="regi_usu" type="text" required/>

		<label>Codigo de usuario</label>
		<input name="usu_docu" type="text" required/>

		<label>Codigo de producto</label>
		<input name="produ_cod" type="text" required/>

		<label >Registra serial</label>
		<input name="registro_serial" type="text" required/>
	

		<label >Registre color </label>
		<input name="registre_color" type="color"required/>

	
		<label >Registre Fecha </label>
		<input  name="registre_fecha" type="date"required/>
	
		
		<label >Registre descripcion</label>
		<textarea  type="text"></textarea>

	
		<label >Registre autoalterna</label>
		<input  name="registre_autoalerta" type="text"/>

		<label >Registre Cantidad del Producto</label>
		<input  name="registre_autoalerta" type="text"/>
	</div>


		<button  class="btn" value="Guardar">Guardar</button>
		
</form>
</section>

 <section >
    <?php include 'consulta.registro_producto.php'; ?>
  </section>


