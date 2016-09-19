<!-- Andrea T. Villegas -->
<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");

$action= $_REQUEST["action"];
switch ($action) {
	case 'Guardar'://funcion para guardar usuario 9 lineas de abajo son para capturar los datos
		$seleccion=$_POST["seleccion"];
		//$codigo=$_POST["codigo"];
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$tipodocu=$_POST["tipodocu"]
		$documento=$_POST["documento"];
		$email=$_POST["email"];
		$telefono=$_POST["telefono"];
		$direccion=$_POST["direccion"];
		$estado=$_POST["estado"];
		$centro=$_POST["centro"];
		$cargo=$_POST["cargo"];
		$contrasena=$_POST["contrasena"];
		$cifrar=password_hash($contrasena,PASSWORD_DEFAULT);
		//$codigo,
		try{
			Gestion_usuario::Guardar($selecion,$nombre,$apellido,$tipodocu,$documento,$email,$telefono,$direccion,$estado,$centro,$cargo,$cifrar);
			echo "Guardo con exito";

		}catch(Exception $e){
			echo $e;
		}

		break;

		case 'Modificar'://funcion para modificar usuario 9 lineas de abajo son para capturar los datos
		$codigo=$_POST["codigo"];
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$tipodocu=$_POST["tipodocu"]
		$documento=$_POST["documento"];
		$email=$_POST["email"];
		$telefono=$_POST["telefono"];
		$direccion=$_POST["direccion"];
		$estado=$_POST["estado"];
		$centro=$_POST["centro"];
		$cargo=$_POST["cargo"];
		$contrasena=$_POST["contrasena"];
		$cifrars=password_hash($contrasenas,PASSWORD_DEFAULT);

try{
			Gestion_usuario::Modificar($selecion,$nombre,$apellido,$tipodocu,$documento,$email,$telefono,$direccion,$estado,$centro,$carga,$cifrars);
		header("location:../views/consulta.usuario.php");

		}catch(Exception $e){
			echo $e;
		}

		break;

		case 'estado':
			$estado="Inactivo";
			$codigo=$_GET["codigo_usuario"];
	
			
			try{
				Gestion_usuario::Estado($estado,$codigo);
				header("location:../views/registro.usuario.php");

			}catch(Exception $e){
				echo $e;
			}
		break;

		case 'activo':
			$estado="activo";
			$codigo=$_GET["codigo_usuario"];
	
			
			try{
				Gestion_usuario::activo1($estado,$codigo);
				header("location:../views/registro.usuario.php");

			}catch(Exception $e){
				echo $e;
			}
		break;
}
?>
