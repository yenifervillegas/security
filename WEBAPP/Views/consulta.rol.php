<?php
require_once("../Model/conexion.php");
require_once("../Model/rol.class.php");


$rol =Gestion_rol::Consultar();


?>
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


  $(".contenendor").load("modifico_rol.php?rol_cod="+code+"");
 }

function valida4(code1){
	// if(confirm("desea Eliminar este rol")){
	// self.location.href="../Controller/guardarrol.php?rol_cod="+code1+"&action=Borrar";
	// // <a href='../Controller/guardarrol.php?rol_cod=".$consulta["rol_cod"]."&action=Borrar' class='btn-floating red'>
	// // 									Eliminar
	// // 								</a>
	// }

swal({
  title: "Are you sure?",
  text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false
},
function(){
  swal("Deleted!", "Your imaginary file has been deleted.", "success");
  self.location.href="../Controller/guardarrol.php?rol_cod="+code1+"&action=Borrar";
});







 }

  </script>

<table id="myTable" class="striped responsive-table">
	<thead>
		<tr>
			<td>Codigo</td>
			<td>Nombre del rol</td>
			<td>Accion</td>

			</tr>
	</thead>
	<tbody>
		<?php
		/* Con esta linea se puede hacer el elminar - <a href='../Controller/guardarrol.php?rol_cod=".$consulta["rol_cod"]."&action=Borrar' >Eliminar</a>*/
			foreach ($rol as $consulta) {
				echo "<tr>
							<td>".$consulta["rol_cod"]."</td>
							<td>".$consulta["rol_nom"]."</td>
							
							<td>
								<span style='cursor:pointer' onclick='valida3(".$consulta["rol_cod"].");' class='btn-floating light-green'>
                     				modificar
                  				 </span>
								
								<span onclick='valida4(".$consulta["rol_cod"].")'>Eliminar</span>
							</td>
					</tr>";
			}
		?>
	<br></tbody>
</table>
