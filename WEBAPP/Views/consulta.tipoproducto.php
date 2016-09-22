<?php
  require_once '../Model/conexion.php';
  require_once '../Model/tipoproducto.class.php';
  $tipo_produ = Gestion_Tipoproducto::ConsultarTodo();
?>
<head>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript"src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
  <script type="text/javascript">
  $(document).ready(function(){
       $('#myTable').DataTable();
  
});</script>

<div class="container">

  </head>
    <table id="myTable">
      <thead>
        <tr>
          <td>Codigo</td>
          <td>Nombre</td>
          <td>Marca</td>
          <td>Acciones</td>
        </tr>
      </thead>
      <tbody>
        <?php
          $item = 1;
          foreach ($tipo_produ as $row) {
            echo"<tr>
                    
                    <td>".$row["produ_cod"]."</td>
                    <td>".$row["produ_nom"]."</td>
                    <td>".$row["produ_marca"]."</td>
                    <td>
                    <a href='modifico_tipoproducto.php?produ_cod=".$row["produ_cod"]."'>Modificar</a> -
                    <a href='../Controller/tipoproducto.controller.php?produ_cod=".$row["produ_cod"]."&action=delete'>Eliminar</a></td>
                    
                  </tr>";
            $item++;
          }
         ?>
      </tbody>
    </table>
</div>
