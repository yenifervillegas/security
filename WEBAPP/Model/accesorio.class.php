<?php
//se guarda en la base de datos
class Gestion_usuario{
	function Guardar($codigo_regi,$nombre,$cantidad){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="INSERT INTO accesorios(regi_cod,acce_nom,acce_cantidad) values(?,?,?)";

		$query=$pdo->prepare($sql);
		$query->execute(array($codigo_regi,$nombre,$cantidad));

		Conexion::Cerrarbd();
}

	function modificar($codigo_regi,$codigo,$nombre,$cantidad){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


		$sql="UPDATE  accesorios set acce_nom=?,acce_cantidad=? WHERE acce_cod=?,regi_cod=?";
		$query=$pdo->prepare($sql);
		$query->execute(array($nombre,$cantidad,$codigo,$codigo_regi));


		Conexion::Cerrarbd();
	}

	function ConsultarTodo()
	{
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM accesorios ";
		$query= $pdo->prepare($sql);
		$query->execute();

		$result = $query->fetchAll(PDO::FETCH_BOTH);
		Conexion::Cerrarbd();
		return $result;
	

	}
}
?>