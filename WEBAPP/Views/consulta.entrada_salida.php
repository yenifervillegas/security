<?php

require_once("../model/conexion.php");
require_once("../model/registro.producto.class.php");

$codigoEntrada=Gestion_producto::consultarEntrada();

?>

<html>
<head>
	<title></title>
 	<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="css/jquery.dataTables.min.css" />
	
	<script type="text/javascript">
	$(document).ready(function(){
   		 $('#myTable').DataTable( {
 			"scrollY": '50vh',
  			"scrollCollapse": true,
  			"paging":false,
 			"language": {
   			"url": "js/Spanish.json"
   		}
  });
   		 alert("esa alerta esta en el consultar salida");
	});
	function salida(sld){

		location.href = "../Controller/controller.registro.producto.php?salidas="+sld+"&action=salidae";
	}
	</script>

</head>
<body>
	<h2>Consultar Entrada y Salida</h2>
	<div id="consuEntra">

<table id="myTable">
	<thead>
		<tr>
			<td>Codigo entrada y salida</td>
			<td>Codigo de registro de producto</td>
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
					<td>".$comp["entra_cod"]."</td>
					<td>".$comp["regi_cod"]."</td>
					<td>".$comp["entra_fechaentra"]."</td>
					<td>".$comp["entra_fechasal"]."</td>
					<td>".$comp["entra_horaentra"]."</td>
					<td>".$comp["entra_horasal"]."</td>
					<td><div onclick='salida(".$comp["entra_cod"].");'>Salida</div></td>
					
			</tr>";
			}
		?>
	</tbody>
</table>
</div>
