<?php

require_once("../model/conexion.php");
require_once("../model/registro.producto.class.php");

$codigoEntrada=Gestion_producto::consultarEntrada();

?>

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
