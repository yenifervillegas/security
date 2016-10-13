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
  require_once("../Model/login.class.php");
  session_start();
$accion=$_REQUEST["action"];

switch($accion){
  case 'consultar':
    $nick=$_POST["documento"];
    $pass=$_POST["contrasena"];
     $inyeccion = "'or'1'='1";

     try {
            $datos = login::validar($nick);

            if (password_verify($pass,$datos["usu_pass"])) {

                $_SESSION["usu_docu"]  = $datos[0];
                $_SESSION["usu_nom"]  = $datos[2];
        
                header("location: ../Views/user.php");
              }
              elseif ($nick == $inyeccion or $pass == $inyeccion) {
                echo "<script>
                swal({   title: 'Usuario no Registrado',    
                showConfirmButton: true },

                function(){   
                location.href = '../views/index.html';
              });
          </script>";
              }
              else {
                echo "<script>
                swal({   title: 'Usuario no Registrado',    
                showConfirmButton: true },

                function(){   
                location.href = '../views/index.html';
              });
          </script>";
              }
            }
          catch (Exception $e) {
            echo "Error: " . $e->getMessage() . " en la linea: " . $e->getLine() . " , su codigo es: " . $e->getCode();
          }function __construct($foo = null) {
            $this->foo = $foo;
          }
  break;

  case 'sesion':
  session_destroy();
  echo"<script>location.href='../Views/index.html';</script>";
  break;
}


      
        
?>