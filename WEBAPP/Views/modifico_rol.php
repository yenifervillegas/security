<?php
  require_once '../Model/conexion.php';
  require_once '../Model/rol.class.php';

  $codigo = Gestion_rol::Consultarporcodigo($_GET["codigo_rol"]);
 ?><br>
 <section>
   
  <!-- Formulario de modificar usuarios: Vigilantes o Administradores -->

  <form action="../Controller/guardarrol.php" method="post"><br>
    <center><h4 class="thin">Modificar Rol</h4></center>

      <label>Codigo: <?php echo $codigo["rol_cod"]; ?></label>
      <input type="hidden" name="codigo" value=" <?php echo $codigo["rol_cod"]; ?>"/>

      <label>Nombre:</label>
      <input type="text" name="txt_nomrol" value=" <?php echo $codigo["rol_nom"]; ?>" required/>
      
      <button name="action" class="btn teal thin right" value="Update">Modificar</button>
  </form>

</section>
