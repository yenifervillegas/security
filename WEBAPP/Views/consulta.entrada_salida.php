<?php

require_once("../model/conexion.php");
require_once("../model/registro.producto.class.php");

$codigoEntrada=Gestion_producto::consultarEntrada();

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

  </script>

	<h2>Consultar Entrada y Salida</h2>
	
<section class="content-table1">
<table id="myTable">
	<thead>
		<tr>

			
			<td>nombre</td>
			<td>documento</td>
			<td>Nombre de producto</td>
			<td>serial</td>
			<td>accesorios</td>
			<td>cantidad de accesorios</td>
			<td>Fecha de entrada </td>
			<td>Fecha de salida</td>
			<td>Hora de entrada</td>
			<td>Hora de salida</td>
			<td>Acciòn</td>


		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($codigoEntrada as $comp) {
			echo "<tr>
				
					<td>".$comp["usu_nom"]." ".$comp["usu_ape"]."</td>
					<td>".$comp["usu_docu"]."</td>
					<td>".$comp["produ_nom"]."</td>
					<td>".$comp["regi_serial"]."</td>
					<td>".$comp["acce_nom"]."</td>
					<td>".$comp["acce_cantidad"]."</td>
					<td>".$comp["entra_fechaentra"]."</td>
					<td>".$comp["entra_fechasal"]."</td>
					<td>".$comp["entra_horaentra"]."</td>
					<td>".$comp["entra_horasal"]."</td>
					<td><div id='consuEntra' onclick='salida(".$comp["entra_cod"].");'>Dar salida</div></td>
					
			</tr>";
			}
		?>
	</tbody>
</table> 
</section>