<?php
  require '../Model/conexion.php';
  require '../Model/propietario.class.php';

  $clic= $_REQUEST["accion"];

  switch ($clic) {
  	case 'registro':

      $codigo   = htmlentities($_POST["cod"]);
      $cedula   = htmlentities($_POST["ced"]);
      $nombre   = htmlentities($_POST["nom"]);
      $apellido = htmlentities($_POST["ape"]);
      $telefono = htmlentities($_POST["tel"]);
      $direccion= htmlentities($_POST["dir"]);
      $email    = htmlentities($_POST["ema"]);
      $centro   = htmlentities($_POST["cen"]);
      $cargo    = htmlentities($_POST["car"]);

    		try{
    			registro::guardar($codigo, $cedula, $nombre, $apellido, $telefono, $direccion, $email, $centro, $cargo);
          echo "Registro Guardar";
    		} catch(Exception $e){
    			echo $e->getMessage() . " en la linea: " . $e->getLine() . ".";
    		}
      break;

}
    case 'actualizar':

       $codigo   = htmlentities($_POST["cod"]);
       $cedula   = htmlentities($_POST["ced"]);
       $nombre   = htmlentities($_POST["nom"]);
       $apellido = htmlentities($_POST["ape"]);
       $telefono = htmlentities($_POST["tel"]);
       $direccion= htmlentities($_POST["dir"]);
       $email    = htmlentities($_POST["ema"]);
       $centro   = htmlentities($_POST["cen"]);
       $cargo    = htmlentities($_POST["car"]);

         try{
          	  registro::modificar($codigo, $cedula, $nombre, $apellido, $telefono, $direccion, $email, $centro, $cargo);

       		}catch(Exception $e){
          			echo $e->getMessage() . " en la linea: " . $e->getLine() . ".";
          		}
         break;

  ?>
