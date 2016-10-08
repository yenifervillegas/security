<?php
 require_once '../Model/conexion.php';
require_once '../Model/accesorio.class.php';

  $tipo_produ = Gestion_usuario::ConsultarTodo();
$cargarregi=Gestion_usuario::consultarultimoregi();


?>

<h2>Registro de accesorios</h2>
 <section class="content-form">

     <form class="" action="../Controller/accesorio.controller.php" method="post">

      <label for="">Codigo de registro:<?php echo $cargarregi["regi_cod"]?></label>
       <input type="hidden" name="codigo_regi"  value="<?php echo $cargarregi["regi_cod"]?>">

       <label for="">Nombre del Accesorio</label>
       <input type="text" name="nombre" >

       <label for="">Cantidad</label>
       <input type="text" name="cantidad" />
</br>

       <button name="action"  value="Guardar">Guardar</button>
     </form>
  </section>
<section class="content-table">
    <?php
      include 'consulta.accesorio.php';
     ?>
  </section>
