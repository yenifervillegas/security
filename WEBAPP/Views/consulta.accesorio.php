<?php
  require_once '../Model/conexion.php';
  require_once '../Model/accesorio.class.php';
  $tipo_produ = Gestion_usuario::ConsultarTodo();
?>
<div class="container">

          <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
          <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
          <script type="text/javascript"src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
          <script type="text/javascript">$(document).ready(function(){
            $('#myTable').DataTable();
        });</script>

  
    <table id="myTable">
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
                    <a href='modificar.accesorio.php?acce_cod=".$row["acce_cod"]."'>Modificar</a> -
                    <a href='../Controller/accesorio.controller.php?acce_cod=".$row["acce_cod"]."&action=eliminar' >Eliminar</a></td>
                  </tr>";
            $item++;
          }
         ?>
      </tbody>
    </table>
</div>
