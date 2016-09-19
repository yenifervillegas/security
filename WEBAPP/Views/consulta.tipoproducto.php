<?php
  require_once '../Model/conexion.php';
  require_once '../Model/tipoproducto.class.php';
  $tipo_produ = Gestion_Tipoproducto::ConsultarTodo();
?>
<div class="container">

  <h1>Gestion de tipo de producto</h1>
  <a href="registro.tipoproducto.php">Volver</a>
    <table id="datatable">
      <thead>
        <tr>
          <td>Item</td>
          <td>Codigo</td>
          <td>Nombre</td>
          <td>Descripcion</td>
          <td>Acciones</td>
        </tr>
      </thead>
      <tbody>
        <?php
          $item = 1;
          foreach ($tipo_produ as $row) {
            echo"<tr>
                    <td>".$item."</td>
                    <td>".$row["tipopro_cod"]."</td>
                    <td>".$row["tipopro_nombre"]."</td>
                    <td>".$row["tipopro_desc"]."</td>
                    <td>
                    <a href='modifico_tipoproducto.php?tipopro_cod=".$row["tipopro_cod"]."'>Modificar</a> -
                    <a href='../Controller/tipoproducto.controller.php?tipopro_cod=".$row["tipopro_cod"]."&accion=delete' >Eliminar</a></td>
                  </tr>";
            $item++;
          }
         ?>
      </tbody>
    </table>
</div>
