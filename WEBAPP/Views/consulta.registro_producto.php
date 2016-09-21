<?php

require_once("../Model/conexion.php");
require_once("../Model/registro.producto.class.php");

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
			<td>Codigo registro </td>
			<td>Numero de Documento</td>
			<td>Codigo producto</td>
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
					<td>".$produc["regi_color"]."</td>
					<td>".$produc["regi_fecha"]."</td>
					<td>".$produc["regi_desc"]."</td>
					<td>".$produc["regi_autoalerta"]."</td>

					<td>".$produc["regi_cantidad"]."</td>

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
