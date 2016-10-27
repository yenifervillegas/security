<!-- Andrea taborda -->
<?php

class Gestion_producto{

	function validadocu($documento){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM usuario WHERE usu_docu=?";

		$query=$pdo->prepare($sql);
		$query->execute(array($documento));

		$result=$query->fetch(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		return $result;
}

	function Guardar($codigo_usu,$codigo_produ,$registro_serial,$registro_marca,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta,$fecha,$hora){
	$pdo=conexion::Abrirbd();
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql="INSERT INTO registro_producto (usu_docu,produ_cod,regi_serial,regi_marca,regi_color,regi_fecha,regi_desc,regi_autoalerta) values(?,?,?,?,?,?,?,?)";

	$query=$pdo->prepare($sql);
	$query->execute(array($codigo_usu,$codigo_produ,$registro_serial,$registro_marca,$registre_color,$registre_fecha,$registre_decrip,$registre_autoalerta));	

//consultar entrada y salir

	$sql1="SELECT max(regi_cod) FROM registro_producto";
	$query=$pdo->prepare($sql1);
	$query->execute();

	// $result1=$query["regi_cod"];

	// $result1=$query->rowCount();
	$result1=$query->fetch(PDO::FETCH_BOTH);
    $codigo=$result1[0];

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
		
		$sqlP= "SELECT registro_producto.regi_cod,registro_producto.usu_docu,tipo_producto.produ_nom,registro_producto.regi_serial,registro_producto.regi_marca,registro_producto.regi_color,registro_producto.regi_fecha,registro_producto.regi_desc,registro_producto.regi_autoalerta
from tipo_producto inner join registro_producto on(tipo_producto.produ_cod=registro_producto.produ_cod)";

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

	function consultarultimousu(){
		$pdo=conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM usuario ORDER BY usu_cod DESC LIMIT 1";
		$query=$pdo->prepare($sql);
		$query->execute();

		$result=$query->fetch(PDO::FETCH_BOTH);
		
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

		$sql = "SELECT usuario.usu_nom,usuario.usu_ape,usuario.usu_docu,tipo_producto.produ_nom,registro_producto.regi_serial,accesorios.acce_nom,accesorios.acce_cantidad,entrada_salida.entra_cod,entrada_salida.entra_fechaentra,entrada_salida.entra_fechasal,entrada_salida.entra_horaentra,entrada_salida.entra_horasal 
from usuario inner join  registro_producto on(usuario.usu_docu=registro_producto.usu_docu)
             inner join  tipo_producto on(tipo_producto.produ_cod=registro_producto.produ_cod)
             inner join  entrada_salida on(registro_producto.regi_cod=entrada_salida.regi_cod)
             left join  accesorios on(registro_producto.regi_cod=accesorios.regi_cod)
";
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
