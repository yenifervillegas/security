<?php
  require_once '../Model/conexion.php';
  require_once '../Model/accesorio.class.php';
  $tipo_produ = Gestion_usuario::ConsultarTodo();
?>
<div class="container">

  <h1>Gestion de tipo de producto</h1>
  <a href="registro.tipoproducto.php">Volver</a>
    <table id="datatable">
      <thead>
        <tr>
          <td>Codigo</td>
          <td>Nombre de Accesorio</td>
          <td>Cantidad</td>
          <td>Acciones</td>
        </tr>
      </thead>
      <tbody>
        <?php
          $item = 1;
          foreach ($tipo_produ as $row) {
            echo"<tr>
                    <td>".$row["acce_cod"]."</td>
                    <td>".$row["acce_nom"]."</td>
                    <td>".$row["acce_cantidad"]."</td>
                    <td>
                    <a href='modifico.accesorio.php?acce_cod=".$row["acce_cod"]."'>Modificar</a> -
                    <a href='../Controller/accesorio.controller.php?acce_cod=".$row["acce_cod"]."&accion=delete' >Eliminar</a></td>
                  </tr>";
            $item++;
          }
         ?>
      </tbody>
    </table>
</div>
