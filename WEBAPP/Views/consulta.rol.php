<?php
require_once("../Model/conexion.php");
require_once("../Model/rol.class.php");


$rol =Gestion_rol::Consultar();


?>

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
								<a href='modifico_rol.php?codigo_rol=".$consulta["rol_cod"]."''>
									Modificar
								</a>
								<a href='../Controller/guardarrol.php?rol_cod=".$consulta["rol_cod"]."&action=Borrar' class='btn-floating red'>
									Eliminar
								</a>
							</td>
					</tr>";
			}
		?>
	<br></tbody>
</table>
