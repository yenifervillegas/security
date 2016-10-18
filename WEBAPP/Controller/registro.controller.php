<!-- Andrea T. Villegas -->
<html>
<head>
	<title></title>
	<script src="../Views/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="../Views/dist/sweetalert.css">
    <meta charset="UTF-8">
</head>
<body>

</body>
</html>
<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");

$action= $_REQUEST["action"];
switch ($action) { 

	case 'Guardar'://funcion para guardar usuario 9 lineas de abajo son para capturar los datos
		

$documento=$_POST["documento"];


	$validarw=Gestion_usuario::validadocu($documento);

	if($validarw != ""){
		echo "<script>
			swal({   title: 'El usuario ya existe',    
	  	showConfirmButton: true },

	  	function(){   
	   	location.href = '../views/user.php#user.php?seccion=usu';
			});
		</script>";
	}else{
		$seleccion=$_POST["seleccion"];
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$tipodocu=$_POST["tipodocu"];
		$documento=$_POST["documento"];
		$email=$_POST["email"];
		$telefono=$_POST["telefono"];
		$direccion=$_POST["direccion"];
		$centro=$_POST["centro"];
		$estado="Activo";
		$cargo=$_POST["cargo"];	
		$contrasena=$_POST["contrasena"];
		$cifrar=password_hash($contrasena,PASSWORD_DEFAULT);
		
		try{
			Gestion_usuario::Guardar($seleccion,$nombre,$apellido,$tipodocu,$documento,$email,$telefono,$direccion,$centro,$estado,$cargo,$cifrar);
			echo "<script>
				swal({   title: 'Guardo con Éxito',    
	   			showConfirmButton: true },

	   			function(){   
	   			location.href = '../views/user.php#user.php?seccion=usu';
				});
			</script>";

		}catch(Exception $e){
			echo $e;
		}
}
		break;

		case 'Modificar'://funcion para modificar usuario 9 lineas de abajo son para capturar los datos
		$codigo=$_POST["codigo"];
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$tipodocu=$_POST["tipodocu"];
		$documento=$_POST["documento"];
		$email=$_POST["email"];
		$telefono=$_POST["telefono"];
		$direccion=$_POST["direccion"];
		$centro=$_POST["centro"];
		$cargo=$_POST["cargo"];
		$contrasenah=$_POST["contrasena1"];
		$cifrars=password_hash($contrasenah,PASSWORD_DEFAULT);

	try{
		Gestion_usuario::Modificar($codigo,$nombre,$apellido,$tipodocu,$documento,$email,$telefono,$direccion,$centro,$cargo,$contrasenah);
	
			echo "<script>
				swal({   title: 'Modifico con Éxito',    
	   			showConfirmButton: true },

	   			function(){   
	   			location.href = '../views/user.php#user.php?seccion=usu';
				});
			</script>";

		
	}catch(Exception $e){
		echo $e;
	} 
		break;

		case 'estado':
			$estado="Inactivo";
			$codigo=$_GET["codigo_usuario"];
	
			
			try{
				Gestion_usuario::Estado($estado,$codigo);
				header("location:../views/user.php#user.php?seccion=usu");

			}catch(Exception $e){
				echo $e;
			}
		break;

		case 'activo':
			$estado="activo";
			$codigo=$_GET["codigo_usuario"];
	
			
			try{
				Gestion_usuario::activo1($estado,$codigo);
				header("location:../views/user.php#user.php?seccion=usu");

			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'Cancelar':

			echo "<script>location.href = '../views/user.php#user.php?seccion=usu';
			</script>";
		break;
}
?>
