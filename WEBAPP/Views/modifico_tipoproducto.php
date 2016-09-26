<?php
  require_once '../Model/conexion.php';
  require_once '../Model/tipoproducto.class.php';

  $tipo = Gestion_Tipoproducto::ConsultarPorCodigo($_GET["produ_cod"]);

?>
<section >
	<form action="../Controller/tipoproducto.controller.php" method="POST">
      <h1 class="center">Modificar tipo de producto</h1>

		  
        <input type="hidden" name="txt_tipoprocod" value="<?php echo $tipo["produ_cod"]; ?>"/>
      
      <label>Nombre del tipo de producto</label>
        <input type="text" name="txt_tipopronom" value="<?php echo $tipo["produ_nom"]; ?>"/>
  		
      <label>Marca</label>
  		  <input type="text" name="txt_desctipopro" value="<?php echo $tipo["produ_marca"]; ?>">
        </br>
  		<button name="action" value="update">Modificar</button>
      <button name="action" value="cancelar">Cancelar</button>
      
		    <?php echo @$_REQUEST["$mensaje"];?>
  </form>

</section>