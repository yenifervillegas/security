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

	function Modificar($codigo_acce,$codigo_regi,$nombre,$cantidad){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


		$sql="UPDATE  accesorios set acce_nom=?,acce_cantidad=? WHERE acce_cod=?";
		$query=$pdo->prepare($sql);
		$query->execute(array($nombre,$cantidad,$codigo_acce));


		Conexion::Cerrarbd();
	}

	function ConsultarTodo()
	{
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM accesorios";
		$query= $pdo->prepare($sql);
		$query->execute();

		$result = $query->fetchAll(PDO::FETCH_BOTH);
		Conexion::Cerrarbd();
		return $result;
	

	}
	function Consultaracce($codigo){

		$pdo=Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM accesorios where acce_cod=?";
		$query=$pdo->prepare($sql);
		$query->execute(array($codigo));

		$result=$query->fetch(PDO::FETCH_BOTH);
		Conexion::Cerrarbd();
		return $result;
}
	function consultarultimoregi(){
		$pdo=conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM registro_producto ORDER BY regi_cod DESC LIMIT 1";
		$query=$pdo->prepare($sql);
		$query->execute();

		$result=$query->fetch(PDO::FETCH_BOTH);
		
		conexion::Cerrarbd();
		return $result;
	}



	function eliminar($codigoA){
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "DELETE from  accesorios where acce_cod=?";
			$query= $pdo->prepare($sql);
			$query->execute(array($codigoA));

			Conexion::Cerrarbd();
		}
}
?>