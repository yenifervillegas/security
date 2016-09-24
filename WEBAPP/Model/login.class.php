<?php

  class Login{
    public static function validar($name){
      try{

        $pdo=Conexion::Abrirbd();
        $consul = "SELECT * FROM usuario WHERE usu_docu=? ";
        $mostrar = $pdo->prepare($consul);
        $mostrar->execute(array($name));
        $dato=$mostrar->fetch(PDO::FETCH_BOTH);
        return $dato;

        Conexion::Cerrarbd();
      }
      catch (Exception $e) {
          die( "Error: " . $e->getMessage() . " en la linea: " . $e->getLine() . " , su codigo es: " . $e->getCode());
      }
    }
  }
?>