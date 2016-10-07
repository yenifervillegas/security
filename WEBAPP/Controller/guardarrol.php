
<?php
require_once("../Model/conexion.php");
require_once("../Model/rol.class.php");
date_default_timezone_set('America/Bogota');
$action=$_REQUEST["action"];
switch ($action) {
	case 'Guardar':
		
		$nombre_rol=$_POST["txt_nomrol"];
		
		try{
			Gestion_rol::Guardar($nombre_rol);
			echo "<script>alert('Guardo con exito');
                  location.href = '../views/registro.rol.php';
                </script>";

		}catch(Exception $e){
			echo $e;
		}

		break;
	case 'Update':
		$codigo = $_POST["codigo"];
		$rol_nombre = $_POST["txt_nomrol"];

		
		try{
			Gestion_rol::Modificar($codigo,$rol_nombre);
			echo "<script>alert('Modifico con exito');
                  location.href = '../views/registro.rol.php';
                </script>";
		}catch(Exception $e){
			echo $e;
		}

		break;
	case 'Borrar':
           $rol_cod = $_GET["rol_cod"];


    try {
       		 Gestion_rol::Eliminar($rol_cod);
       		 echo "Eliminó con exito";
       		echo "<script>alert('Elimino con exito');
                  location.href = '../views/registro.rol.php';
                </script>";
      	}catch (Exception $e){
       		 	echo $e;
       		 }
     	break;
     		case 'cancelar':
		header("location:../views/user.php#user.php?seccion=rol");
	break;
	
	
}
//header("location:../views/consulta.rol.php");
?>
