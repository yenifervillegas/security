
  <script type="text/javascript">
  $(document).ready(function(){
       $('#myTable').DataTable({
      "scrollY": '50vh',
        "scrollCollapse": true,
        "paging":false,
      "language": {
        "url": "js/Spanish.json"
      }
  });

});
function valida3(code){


  $(".contenendor").load("modificar.accesorio.php?acce_cod="+code+"");
 }


  </script>

  
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
                    
                    <span style='cursor:pointer' onclick='valida3(".$row["acce_cod"].");' class='btn-floating light-green'>
                      Modificar
                   </span>
                    <a href='../Controller/accesorio.controller.php?acce_cod=".$row["acce_cod"]."&action=eliminar' >Eliminar</a></td>
                  </tr>";
            $item++;
          }
         ?>
      </tbody>
    </table>

