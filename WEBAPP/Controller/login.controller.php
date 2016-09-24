<?php
  require_once("../Model/conexion.php");
  require_once("../Model/login.class.php");
  session_start();
$accion=$_POST["action"];

switch($accion){
  case 'consultar':
    $nick=$_POST["documento"];
    $pass=$_POST["contrasena"];
     $inyeccion = "'or'1'='1";

     try {
            $datos = login::validar($nick);

            if (password_verify($pass,$datos["usu_pass"])) {

                $_SESSION["usu_docu"]  = $datos[0];
                $_SESSION["usu_nom"]  = $datos[1];
        
                header("location: ../Views/user.php");
              }
              elseif ($nick == $inyeccion or $pass == $inyeccion) {
                echo "No se pase de listo con nosotros.<br>";
              }
              else {
                echo "<script>alert('Usuario no registrado');
                  location.href = '../views/index.html';
                </script>";
              }
            }
          catch (Exception $e) {
            echo "Error: " . $e->getMessage() . " en la linea: " . $e->getLine() . " , su codigo es: " . $e->getCode();
          }function __construct($foo = null) {
            $this->foo = $foo;
          }
  break;

  case 'session':
  session_destroy();
  echo"<script>location.href='../Views/index.html';</script>";
  break;
}


      
        
?>