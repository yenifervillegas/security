<!-- Andrea taborda -->
<?php
  require_once("../model/conexion.php");
  require_once("../model/registro.producto.class.php");

  $codigoP = Gestion_producto::consultaP($_GET["regi_cod"]);
 ?>
 <section class="content-form" id="Modificoproducto">
  <!-- Formulario de modificar usuarios: Vigilantes o Administradores -->
  <form action="../controller/controller.registro.producto.php" method="post">
      
  <h1>Modificar</h1>
      <label>Codigo de registro producto: <?php echo $codigoP["regi_cod"]; ?></label>
      <input type="hidden" name="codigo_regi" readonly value="<?php echo $codigoP["regi_cod"]; ?>">

        </br>
      <label>Codigo de usuario</label>
      <input type="text" name="codigo_usu" readonly value="<?php echo $codigoP["usu_cod"]; ?>">

      <label>codigo de producto</label>
      <input type="text" name="codigo_produ" value=" <?php echo $codigoP["produ_cod"]; ?>" />

      <label>registro serial</label>
      <input type="text" name="regi_serial" value=" <?php echo $codigoP["regi_serial"]; ?>"/>

      <label>registro color</label>
      <input type="color" name="regi_color" value=" <?php echo $codigoP["regi_color"]; ?>"/>

      <label>registro fecha</label>
      <input type="text" name="regi_fecha" value=" <?php echo $codigoP["regi_fecha"]; ?>"/>

      <label>registro descripcion</label>
      <input type="text" name="regi_desc" value=" <?php echo $codigoP["regi_desc"]; ?>"/>

      <label>registro autoalterna</label>
      <input type="text" name="regi_autoalerta" value=" <?php echo $codigoP["regi_autoalerta"]; ?>"/>

      <label>registro cantidad</label>
      <input type="text" name="regi_cantidad" value=" <?php echo $codigoP["regi_cantidad"]; ?>"/>

</br>
      <button name="action" value="modificar">Modificar</button>

  <button name="action" value="Cancelar">Cancelar</button>
  </form>
</section>