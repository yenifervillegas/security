<?php

require_once("../Model/conexion.php");
require_once("../Model/registro.producto.class.php");

$producto=Gestion_producto::consultar();

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


  $(".contenendor").load("modificar.registro_producto.php?regi_cod="+code+"");
 }
</script>
</head>
<body>
	
<table id="myTable">
	<thead>
		<tr>
			<td>Codigo registro </td>
			<td>Codigo Usuario</td>
			<td>Producto</td>
			<td>Registro serial </td>
			<td>Registro color</td>
			<td>Registro fecha</td>
			<td>Registro descripcion</td>
			<td>Registro autoalterna </td>
			<td>Registro cantidad </td>
			<td>Accion</td>


		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($producto as $produc) {
			echo "<tr>
					<td>".$produc["regi_cod"]."</td>
					<td>".$produc["usu_cod"]."</td>
					<td>".$produc["produ_cod"]."</td>
					<td>".$produc["regi_serial"]."</td>
					<td><div style='height:30px; width:30px; background-color:".$produc["regi_color"]."'></div></td>
					<td>".$produc["regi_fecha"]."</td>
					<td>".$produc["regi_desc"]."</td>
					<td>".$produc["regi_autoalerta"]."</td>

					<td>".$produc["regi_cantidad"]."</td>

					<td>
						
						<span style='cursor:pointer' onclick='valida3(".$produc["regi_cod"].");' class='btn-floating light-green'>
							modificar
						</span>
						<a href='../Controller/controller.registro.producto.php?codigo_produc=".$produc["regi_cod"]."&action=eliminar' >Eliminar</a>
					</td>
			</tr>";
			}
		?>
	</tbody>
</table>

