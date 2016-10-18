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
require_once("../Model/tipoproducto.class.php");

$accion = $_REQUEST["action"];

	switch ($accion) {
case 'create':

	
	$tipopro_nombre=$_POST["txt_tipopronom"];
	
	
	try {
		Gestion_Tipoproducto::Guardar($tipopro_nombre);
		echo "<script>
				swal({   title: 'Guardo con Éxito',    
	   			showConfirmButton: true },

	   			function(){   
	   			location.href = '../views/user.php#user.php?seccion=tipo';
				});
			</script>";
	}
	catch (Exception $e) {
	$mensaje =("Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine());
	}
				// header("Location: ../View/guardar_producto.php?m=".$mensaje);

			break;
		case 'update':

         	$tipopro_cod=$_POST["txt_tipoprocod"];
			$tipopro_nombre=$_POST["txt_tipopronom"];
			

     		 try {
     		 	Gestion_Tipoproducto::Modificar($tipopro_cod, $tipopro_nombre);
     		 	echo "<script>
				swal({   title: 'Modifico con Èxito',    
	   			showConfirmButton: true },

	   			function(){   
	   			location.href = '../views/user.php#user.php?seccion=tipo';
				});
			</script>";
     		 } catch (Exception $e) {
     		 	echo $e;
     		 }
   		break;
   		case 'delete':
           $tipopro_cod = $_GET["produ_cod"];


       		 try {
       		 	Gestion_Tipoproducto::Eliminar($tipopro_cod);
       		 	echo "<script>
				swal({   title: 'Elimino con Éxito',    
	   			showConfirmButton: true },

	   			function(){   
	   			location.href = '../views/user.php#user.php?seccion=tipo';
				});
			</script>";
						
			
       		 } catch (Exception $e) {
       		 	echo $e;
       		 }
     		break;

     		case 'cancelar':
		header("location:../views/user.php#user.php?seccion=tipo");
	break;
	}
	
?>
