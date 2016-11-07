<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");


$usuario =Gestion_usuario::consultar_usuario();//se trae los usuarios registrados

?>


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
   	// 	   		
				$(".contenendor").load("modificar.usuario.php?codigo_usuario="+code+"");
				
			
   		   		//location.href = "modificar.usuario.php?codigo_usuario="+code+"";
   		   	}
		  }

	</script>
</head>
<body>
<div  >
<table id="myTable" >
	<thead>
		<tr>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Tipo de documento</td>
			<td>Documento</td>
			
			<td>Telefono</td>
			<td>Dirección</td>
			<td>Centro</td>
			<td>Estado</td>
			<td>Cargo</td>
			<td>Acción</td>
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
							<td>".$consulta["usu_tel"]."</td>
							<td>".$consulta["usu_direc"]."</td>
							<td>".$consulta["usu_centro"]."</td>
							<td>".$consulta["usu_estado"]."</td>
							<td>".$consulta["usu_cargo"]."</td>
							
							
							<td>
								<span onclick='valida(".$consulta["usu_cod"].");'class='btn-floating light-red' style='cursor:pointer'>
									Inactivar
								</span>
								<span onclick='valida1(".$consulta["usu_cod"].");'class='btn-floating light-blue' style='cursor:pointer'>
									Activar
								</span>
								<span style='cursor:pointer' onclick='valida2(&#34".$consulta["usu_estado"]."&#34,".$consulta["usu_cod"].");'class='btn-floating light-green'>
									Modificar
								</span>
							</td>
					</tr>";
			}
		?>
	</tbody>


</table>
</div>
