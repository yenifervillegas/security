<?php
  require_once '../Model/conexion.php';
  require_once '../Model/tipoproducto.class.php';

  $tipo = Gestion_Tipoproducto::ConsultarPorCodigo($_GET["tipopro_cod"]);
?>

	<form action="../Controller/tipoproducto.controller.php" method="POST">
      <h1 class="center">Modificar tipo de producto</h1>
		  <label>Codigo de Tipo producto:<?php echo $tipo["tipopro_cod"]; ?></label>
        <input type="hidden" name="txt_tipoprocod" readonly value="<?php echo $tipo["tipopro_cod"]; ?>">
      <label>Nombre del tipo de producto</label>
        <input type="text" name="txt_tipopronom" value="<?php echo $tipo["tipopro_nombre"]; ?>"/>
  		<label>Descripcion de tipo de producto</label>
  		  <input type="text" name="txt_desctipopro" value="<?php echo $tipo["tipopro_desc"]; ?>">
  		<button name="accion" value="update">Modificar</button>
		    <?php echo @$_REQUEST["$mensaje"];?>
  </form>
  <a href="consulta.tipoproducto.php">Volver</a>
<a href="registro.tipoproducto.php">Crear tipo de producto</a>
