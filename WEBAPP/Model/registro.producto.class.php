<!-- Andrea taborda -->
<?php

class Gestion_producto{


	function Guardar($codigo_usu,$codigo_produ,$registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta,$registre_cantidad,$fecha,$hora){
	$pdo=conexion::Abrirbd();
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql="INSERT INTO registro_producto (usu_cod,produ_cod,regi_serial,regi_color,regi_fecha,regi_desc,regi_autoalerta,regi_cantidad) values(?,?,?,?,?,?,?,?)";

	$query=$pdo->prepare($sql);
	$query->execute(array($codigo_usu,$codigo_produ,$registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta,$registre_cantidad));	

//consultar entrada y salir

	$sql1="SELECT max(regi_cod) FROM registro_producto";
	$query=$pdo->prepare($sql1);
	$query->execute();

	$result1=$query->rowCount();
    $codigo=$result1;

	$sql2="INSERT INTO entrada_salida (regi_cod,entra_fechaentra,entra_fechasal,entra_horaentra,entra_horasal) values(?,?,?,?,?)";

	$query1=$pdo->prepare($sql2);
	$query1->execute(array($codigo,$fecha,"",$hora,""));

	
	conexion::Cerrarbd();

}
	


	function consultaP($codigo){
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM registro_producto WHERE regi_cod = ?";
		$query= $pdo->prepare($sql);
		$query->execute(array($codigo));

		$result = $query->fetch(PDO::FETCH_BOTH);
		return $result;

		Conexion::Cerrarbd();
	}



	function consultar(){
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sqlP= "select * from registro_producto";

		$query= $pdo->prepare($sqlP);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);
	
		Conexion::Cerrarbd();
			return $result;


	}

	function consultarprodu(){
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sqlP= "select * from tipo_producto";

		$query= $pdo->prepare($sqlP);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);
	
		Conexion::Cerrarbd();
			return $result;


	}

	function consultarUsu(){
		$pdo=conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM usuario";
		$query=$pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);
		
		conexion::Cerrarbd();
		return $result;
	}



		function modificar($codigo_regi,$codigo_usu,$codigo_produ,$registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta,$registre_cantidad){

			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$sql = "UPDATE registro_producto SET usu_cod=?,produ_cod=?,regi_serial=?,regi_color=?,regi_fecha=?,regi_desc=?,regi_autoalerta=?,regi_cantidad=? WHERE regi_cod =?";

			$query= $pdo->prepare($sql);
			$query->execute(array($codigo_usu,$codigo_produ,$registro_serial,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta,$registre_cantidad,$codigo_regi));

			Conexion::Cerrarbd();
		}

		function eliminar($codigoA){
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "DELETE from  registro_producto where regi_cod=?";
			$query= $pdo->prepare($sql);
			$query->execute(array($codigoA));

			Conexion::Cerrarbd();
		}

		function consultarEntrada(){
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM entrada_salida";
		$query= $pdo->prepare($sql);
		$query->execute();

		$result = $query->fetchALL(PDO::FETCH_BOTH);
		return $result;

		Conexion::Cerrarbd();
	}

		function entrada_salida($codigo,$fecha,$hora){
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "UPDATE entrada_salida SET entra_fechasal = ?, entra_horasal = ? WHERE entra_cod = ?";
			$query= $pdo->prepare($sql);
			$query->execute(array($fecha,$hora,$codigo));

			Conexion::Cerrarbd();
		}




}


?>
