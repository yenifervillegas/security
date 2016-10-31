<!-- Andrea T. -->
<?php
require_once("../Model/conexion.php");
include("../Model/registro.producto.class.php");


$producto=Gestion_producto::consultarprodu();
$cargarusu=Gestion_producto::consultarultimousu();

$fecha=date("Y-m-d");


?>
<script type="text/javascript">

$("#codigo_usu").keyup(function(){
	var paramet= $(this).val();
	$.post("listadoajax.php",{vlparam2: paramet}, function(data){
	$(".conteDocu").val(data)

	codigo1=$("#codigo_usu").val();
	codigo2=$(".conteDocu").val();

	if (codigo1==codigo2) {
		$("#infoLabel").html("");
		$("#infoLabel").css("display", "none");
		$("#registro_serial").removeAttr("disabled");
		$("#registro_marca").removeAttr("disabled");
		$("#registre_color").removeAttr("disabled");
		$("#registre_fecha").removeAttr("disabled");
		$("#registre_decrip").removeAttr("disabled");
		$("#registre_autoalerta").removeAttr("disabled");
		$("#action").removeAttr("disabled");
	}else{
		$("#infoLabel").html("Este usuario no se encuentra en la base de datos");
		$("#infoLabel").css({"display" : "block","width" : "80%", "height" : "50px", "padding-top": "9px", "padding-left": "8px"});
		$("#registro_serial").attr("disabled","disabled");
		$("#registro_marca").attr("disabled","disabled");
		$("#registre_color").attr("disabled","disabled");
		$("#registre_fecha").attr("disabled","disabled");
		$("#registre_decrip").attr("disabled","disabled");
		$("#registre_autoalerta").attr("disabled","disabled");
		$("#action").attr("disabled","disabled");
	}

	});

	});


</script>

<h2>Debes registra primero el usuario para registrar un producto</h2>


<section class="content-form">

	<form action="../Controller/controller.registro.producto.php" method="post">
		
		<!--<input name="codigo_produ" type="text" required/>-->

		<label>Documento del Usuario</label>
		<input name="codigo_usu" id="codigo_usu" type="number" />
		<div id="coc"><input class="conteDocu" type="text"/></div>
		<label id="infoLabel"></label>

		<label>Tipo de producto</label>
		<select name="codigo_produ">
			<option disabled selected>Seleccionar</option>
			<?php
				foreach ($producto as $pd) {
				 	echo "<option value=".$pd["produ_cod"].">".$pd["produ_nom"]." ".$pd["produ_marca"]."</option>";
				 } 
				
			?>
		</select>

		<label >Registra serial</label>
		<input name="registro_serial" id="registro_serial" type="text" required/>
		
		<label>Marca</label>
		<input type="text" name="registro_marca" id="registro_marca" required></br>

		<label >Registre color </label>
		<input name="registre_color" id="registre_color" type="color" required/>

	
		<label>Fecha:</label>
		<input autocomplete='off' id="registre_fecha" name='registre_fecha' type='text'  value='<?php echo $fecha; ?>'>
		
		<label >Registre descripcion</label>
		<textarea name="registre_decrip" id="registre_decrip" type="text"></textarea>

	
		<label >Registre autoalterna</label>
		<input  name="registre_autoalerta" id="registre_autoalerta" type="text"/>

		
	
</br>
</br>

		<button name="action" id="action" value="Guardarpro">Guardar</button>
</form>
</section>

 <section class="content-table">
    <?php include 'consulta.registro_producto.php'; ?>
  </section>

<script type="text/javascript">

</script>
