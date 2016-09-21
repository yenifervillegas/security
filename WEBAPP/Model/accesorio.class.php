<?php
//se guarda en la base de datos
class Gestion_usuario{
	function Guardar($nombre,$cantidad){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="INSERT INTO accesorios(acce_nom,acce_cantidad) values(?,?)";

		$query=$pdo->prepare($sql);
		$query->execute(array($nombre,$cantidad));

		Conexion::Cerrarbd();
}

	function Modificar($nombre,$cantidad,$codigo){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


		$sql="UPDATE  accesorios set acce_nom=?,acce_cantidad=? WHERE acce_cod=?";
		$query=$pdo->prepare($sql);
		$query->execute(array($nombre,$cantidad,$codigo));


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