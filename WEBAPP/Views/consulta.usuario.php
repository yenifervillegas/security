<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");


$usuario =Gestion_usuario::consultar_usuario();//se trae los usuarios registrados

?>


<!DOCTYPE html>
<head>
	<title>Consultar Usuario</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>
	<script type="text/javascript" src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
   		 $('#myTable').DataTable();
	});

   		 function valida(usucod){
   		 		if(confirm("desea inactivar este usuario")){
					location.href = "../Controller/registro.controller.php?codigo_usuario="+usucod+"&action=estado"
				}
   		 }
   		  function valida1(usu){
   		 		if(confirm("desea activar este usuario")){
					location.href = "../Controller/registro.controller.php?codigo_usuario="+usu+"&action=activo"
				}
   		 }
   		  function valida2(usuM,code){
   		   	if (usuM=="Inactivo") {
   		   		alert("este usario esta Inactivo");

   		   	}
   		   	else{
   		   		location.href = "modificar.usuario.php?codigo_usuario="+code+"";
   		   	}
		  }

	</script>
</head>
<body>

<table id="myTable" class="striped bordered responsive-table">
	<thead>
		<tr>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Tipo de documento</td>
			<td>Documento</td>
			<td>Correo Electronico</td>
			<td>Telefono</td>
			<td>Direccion</td>
			<td>Estado</td>
			<td>Centro</td>
			<td>Cargo</td>
			<td>Accion</td>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($usuario as $consulta) {//se pone los registros de los usuarios
				echo "<tr>
							
							<td>".$consulta["usu_nom"]."</td>
							<td>".$consulta["usu_ape"]."</td>
							<td>".$consulta["usu_tipodocu"]."</td>
							<td>".$consulta["usu_docu"]."</td>
							<td>".$consulta["usu_email"]."</td>
							<td>".$consulta["usu_tel"]."</td>
							<td>".$consulta["usu_direc"]."</td>
							<td>".$consulta["usu_estado"]."</td>
							<td>".$consulta["usu_centro"]."</td>
							<td>".$consulta["usu_cargo"]."</td>
							
							<td>
								<span onclick='valida(".$consulta["usu_cod"].");'class='btn-floating light-red' style='cursor:pointer'>
									<i class='material-icons'>airline_seat_flat</i>
								</span>
								<span onclick='valida1(".$consulta["usu_cod"].");'class='btn-floating light-blue' style='cursor:pointer'>
									<i class='material-icons'>directions_walk</i>
								</span>
								<span style='cursor:pointer' onclick='valida2(&#34".$consulta["usu_estado"]."&#34,".$consulta["usu_cod"].");'class='btn-floating light-green'>
									<i class='material-icons'>edit</i>
								</span>
							</td>
					</tr>";
			}
		?>
	</tbody>


</table>

</body>
</html>
