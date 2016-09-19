<?php
  require_once '../Model/conexion.php';
  require_once '../Model/rol.class.php';

  $codigo = Gestion_rol::Consultarporcodigo($_GET["codigo_rol"]);
 ?><br>
 <section>
   <a href="dashboard.php?seccion=rol" class="btn-floating indigo"><i class="material-icons">keyboard_backspace</i></a>
  <!-- Formulario de modificar usuarios: Vigilantes o Administradores -->
  <form action="../Controller/guardarrol.php" method="post"><br>
    <center><h4 class="thin">Modificar Rol</h4></center>
        <input type="hidden" name="txt_codrol" readonly value="<?php echo $codigo["rol_cod"]; ?>">
      <label>Nombre:</label>
        <input type="text" name="txt_nomrol" value=" <?php echo $codigo["rol_nombre"]; ?>" required/>
      <label>Descripción:</label>
        <input type="text" name="txt_descrol" value=" <?php echo $codigo["rol_desc"]; ?>" required/><br>
      <button name="action" class="btn teal thin right" value="Update">Modificar</button>
  </form>

</section>
