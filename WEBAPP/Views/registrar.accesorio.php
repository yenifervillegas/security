<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      include 'conexion.php';
      include 'consultar.accesorio.php';
     ?>

     <form class="" action="../Controller.php" method="post">
       <label for="">Nombre</label>
       <input type="button" name="name" value="">
       <label for="">Apellido</label>
       <input type="text" name="name" value="">
       <button type="submit" name="button">Guardar</button>
     </form>
     <?php

      echo "<input>";
      ?>
  </body>
</html>
