<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  

     <form class="" action="../Controller/accesorio.controller.php" method="post">

       <label for="">Nombre del Accesorio</label>
       <input type="text" name="nombre" >

       <label for="">Cantidad</label>
       <input type="text" name="cantidad" />


       <button name="action"  value="Guardar">Guardar</button>
     </form>
  
    <?php
      include '../Model/conexion.php';
      include 'consulta.accesorio.php';
     ?>
  </body>
</html>
