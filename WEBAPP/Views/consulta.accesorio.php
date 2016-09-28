
<div class="container">

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript"src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
  <script type="text/javascript">
  $(document).ready(function(){
       $('#myTable').DataTable({
  "scrollY": '50vh',
  "scrollCollapse": true,
  "paging":false,
  "language": {
    "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
  });

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
</div>
