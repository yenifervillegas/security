


 
  <script type="text/javascript">
  $(document).ready(function(){
       $('#myTable').DataTable();

});
function valida3(code){

  $("#registrousu").fadeOut();
            
  $("#registrousu").fadeOut();
  $("#fondopan").fadeOut();
  $("#TipodeProducto").fadeOut();
  $("#registroProducto").fadeOut();
  $("#accesorios").fadeOut();
  $("#Modificoacce").fadeIn();
  $("#Modificoacce").load("modificar.accesorio.php?acce_cod="+code+"");
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
                      modificar
                   </span>
                    <a href='../Controller/accesorio.controller.php?acce_cod=".$row["acce_cod"]."&action=eliminar' >Eliminar</a></td>
                  </tr>";
            $item++;
          }
         ?>
      </tbody>
    </table>

