<?php
class registro{
  private static $gestion;
    public function guardar($codigo, $cedula, $nombre, $apellido, $telefono, $direccion, $email, $centro, $cargo){
    	$conex = Conexion::Abrirbd();
    	$conex->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    	self::$gestion = "INSERT INTO propietario(propie_cod,propie_docu,propie_nombre,propie_apelli,propie_tel,propie_dire,propie_email,propie_centro,propie_cargo)
                        VALUES(?,?,?,?,?,?,?,?,?)";
    	$info = $conex->prepare(self::$gestion);
    	$info->execute(array($codigo, $cedula, $nombre, $apellido, $telefono, $direccion, $email, $centro, $cargo));

  	  Conexion::Cerrarbd();
    }
    public function consultar_propietario(){
  		$pdo= Conexion::Abrirbd();
  		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  		$sql="SELECT * FROM propietario";

  		$query=$pdo->prepare($sql);
  		$query->execute();
  		$result=$query->fetchALL(PDO::FETCH_BOTH);

  		Conexion::Cerrarbd();
  		return $result;

  	}
    public function datos_modificar($datos){
      $conex = Conexion::Abrirbd();
      $conex->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $buscar = "SELECT * FROM propietario WHERE propie_cod=?";
      $info = $conex->prepare($buscar);
      $info->execute(array($datos));
      $result = $info->fetch(PDO::FETCH_BOTH);

      Conexion::Cerrarbd();

      return $result;
      }
    }
?>
