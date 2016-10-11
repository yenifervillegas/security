<!-- Andrea T. Villegas -->
<html>
<head>
	<title></title>
		<script src="dist/sweetalert.min.js"></script>
		 <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
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
			echo "<script>alert('Guardo con exito');
			location.href = '../views/user.php#user.php?seccion=usu';
			</script>";

		}catch(Exception $e){
			echo $e;
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
	
echo "<script>alert('Modifico con exito');
			location.href = '../views/user.php#user.php?seccion=usu';
			</script>";
	



	// 	// echo "<script>alert('Modifico con exito');
	// 		// location.href = '../views/user.php#user.php?seccion=usu';
	// 		// </script>";
	// 	 echo("<script>swal({
 //  		title: 'Auto close alert!',
 // 		text: 'I will close in 2 seconds.',
 // 		<a href='../views/user.php#user.php?seccion=usu'></a>
	// })

	// </script>");
		
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
