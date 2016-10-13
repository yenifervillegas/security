<html>
<head>
	<title></title>
	<script src="../Views/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="../Views/dist/sweetalert.css">
</head>
<body>

</body>
</html>
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
			echo "<script>
				swal({   title: 'Guardo con Èxito',    
	   			showConfirmButton: true },

	   			function(){   
	   			location.href = '../views/user.php#user.php?seccion=rol';
				});
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

			echo "<script>
				swal({   title: 'Modifico con Èxito',    
	   			showConfirmButton: true },

	   			function(){   
	   			location.href = '../views/user.php#user.php?seccion=rol';
				});
			</script>";
		}catch(Exception $e){
			echo $e;
		}

		break;
	case 'Borrar':
           $rol_cod = $_GET["rol_cod"];


    try {
       		 Gestion_rol::Eliminar($rol_cod);
       		 
       		echo "<script>
				swal({   title: 'Elimino con Èxito',    
	   			showConfirmButton: true },

	   			function(){   
	   			location.href = '../views/user.php#user.php?seccion=rol';
				});
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
