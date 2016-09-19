<?php

require_once("../model/conexion.php");
require_once("../model/registro.producto.class.php");

$producto=Gestion_producto::consultar();

?>

<html>
<head>

	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
	 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript"src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">$(document).ready(function(){
    $('#myTable').DataTable();
});</script>
</head>
<body>
	
<table id="myTable">
	<thead>
		<tr>
			<td>codigo registro </td>
			<td>Codigo usuario</td>
			<td>codigo producto</td>
			<td>registro serial </td>
			<td>registro color</td>
			<td>registro fecha</td>
			<td>registro descripcion</td>
			<td>registro autoalterna </td>
			<td>accion</td>


		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($producto as $produc) {
			echo "<tr>
					<td>".$produc["regi_cod"]."</td>
					<td>".$produc["usu_cod"]."</td>
					<td>".$produc["produ_cod"]."</td>
					<td>".$produc["prop_cod"]."</td>
					<td>".$produc["regi_serial"]."</td>
					<td>".$produc["regi_color"]."</td>
					<td>".$produc["regi_fecha"]."</td>
					<td>".$produc["regi_desc"]."</td>
					<td>".$produc["regi_autoalterna"]."</td>
					<td>
						<a href='modificar.registro_producto.php?producto=".$produc["regi_cod"]."'>modificar</a>
						<a href='../Controller/controller.registro.producto.php?codigo_produc=".$produc["regi_cod"]."& action=eliminar' >Eliminar</a>
					</td>
			</tr>";
			}
		?>
	</tbody>
</table>

</body>
</html>
