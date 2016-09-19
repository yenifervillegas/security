<?php
class Gestion_rol{
		//Si  se ponen las variables private y static se pone self:: para usarlas
		// private static $sql;
		// private static $query;
		// private static $result;

		function Guardar($codigo_rol, $nombre_rol, $desc_rol){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="INSERT INTO rol(rol_cod, rol_nombre, rol_desc) values(?,?,?)";

		$query=$pdo->prepare($sql);
		$query->execute(array($codigo_rol, $nombre_rol, $desc_rol));

		Conexion::Cerrarbd();

	}
	function Seguir($usu, $segui_modulo, $segui_accion, $fecha, $hora){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql="INSERT INTO seguimiento(usu_cod, segui_modulo, segui_accion, segui_fecha, segui_hora) values(?,?,?,?,?)";
		$query=$pdo->prepare($sql);
		$query->execute(array($usu, $segui_modulo, $segui_accion, $fecha, $hora));

		Conexion::Cerrarbd();

	}
		function Consultar(){
			$pdo= Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			$sql="SELECT * FROM rol";

			$query=$pdo->prepare($sql);
			$query->execute();
			$result=$query->fetchALL(PDO::FETCH_BOTH);

			Conexion::Cerrarbd();
			return $result;
		}
		function Consultarporcodigo($codigo){
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "SELECT * FROM rol WHERE rol_cod = ?";
			$query= $pdo->prepare($sql);
			$query->execute(array($codigo));

			$result = $query->fetch(PDO::FETCH_BOTH);
			return $result;
			Conexion::Cerrarbd();
		}
		function Modificar($rol_cod, $rol_nombre, $desc_rol)
		{
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "UPDATE rol SET rol_nombre = ?, rol_desc = ? WHERE rol_cod = ?";
			$query= $pdo->prepare($sql);
			$query->execute(array($rol_nombre, $desc_rol, $rol_cod));
			Conexion::Cerrarbd();

		}
		function Eliminar($codigo_rol)
		{
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql= "DELETE  FROM rol Where rol_cod = ?";
			$query= $pdo->prepare($sql);
			$query->execute(array($codigo_rol));

			Conexion::Cerrarbd();
		}
	}
?>
