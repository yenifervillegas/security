<?php

require_once("../model/conexion.php");
require_once("../model/registro.producto.class.php");

$codigoEntrada=Gestion_producto::consultarEntrada();

?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
	 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript"src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
    	$('#myTable').DataTable();
	});
	function salida(sld){

		location.href = "../Controller/controller.registro.producto.php?salidas="+sld+"&action=salidae";
	}
	</script>
</head>
<body>
	
<table id="myTable">
	<thead>
		<tr>
			<td>Codigo</td>
			<td>Codigo registro de producto</td>
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
					<td>".$comp["entsal_cod"]."</td>
					<td>".$comp["regi_cod"]."</td>
					<td>".$comp["entsal_fechaent"]."</td>
					<td>".$comp["entsal_fechasal"]."</td>
					<td>".$comp["entsal_horaent"]."</td>
					<td>".$comp["entsal_horasal"]."</td>
					<td><div onclick='salida(".$comp["entsal_cod"].");'>Salida</div></td>
					
			</tr>";
			}
		?>
	</tbody>
</table>

</body>
</html>