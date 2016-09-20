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

     <form class="" action="../Controller/accesorio.controller.php" method="post">

       <label for="">Nombre del Accesorio</label>
       <input type="button" name="nombre" value="">

       <label for="">Cantidad</label>
       <input type="text" name="cantidad" value="">

       <button type="submit" name="button">Guardar</button>
     </form>
  
  </body>
</html>
