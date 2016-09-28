<?php
 require_once '../Model/conexion.php';
require_once '../Model/accesorio.class.php';

  $tipo_produ = Gestion_usuario::ConsultarTodo();
$cargarregi=Gestion_usuario::consultarultimoregi();


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  
<h1>Registro accesorios</h1>
     <form class="" action="../Controller/accesorio.controller.php" method="post">

      <label for="">Codigo de registro</label>
       <input type="text" name="codigo_regi" disabled value="<?php echo $cargarregi["regi_cod"]?>">

       <label for="">Nombre del Accesorio</label>
       <input type="text" name="nombre" >

       <label for="">Cantidad</label>
       <input type="text" name="cantidad" />
</br>

       <button name="action"  value="Guardar">Guardar</button>
     </form>
  
    <?php
     
      include 'consulta.accesorio.php';
     ?>
  </body>
</html>
