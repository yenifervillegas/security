<?php
  require_once("../Model/conexion.php");
  require_once("../Model/login.class.php");
  session_start();
$accion=$_POST["action"];

switch($accion){
  case 'consultar':
    $nick=$_POST["documento"];
    $pass=$_POST["contrasena"];

    try{
     $login=Gestion_usuario::validar($nick,$pass);
      header("location:../views/user.php");
      
    }catch(Exception $e){
      echo "no pasa";
    }
  break;
}

case 'session':
  session_destroy()
  echo"<script>location.href='../Views/index.html';</script>";
  break;
      
        
?>