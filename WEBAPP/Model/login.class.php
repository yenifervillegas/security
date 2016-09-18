<?php
class Gestion_usuario
{
  function validar($nick,$pass){
    
    $pdo = Conexion::Abrirbd();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sqlU= "select * from regi_admin where admin_docu=? and admin_pass=?";

    $query= $pdo->prepare($sqlU);
    $query->execute(array($nick,$pass));

    $result=$query->fetch(PDO::FETCH_BOTH);

    return $result;
    
    //ConexionBD::Cerrarbd();
  }
  
}
?>