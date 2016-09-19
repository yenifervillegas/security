<!-- Andrea T. Villegas -->
<?php
//se guarda en la base de datos
class Gestion_usuario{
	function Guardar($selecion,$nombre,$apellido,$tipodocu,$documento,$email,$telefono,$direccion,$estado,$centro,$cargo,$cifrar){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="INSERT INTO usuario(rol_cod, usu_nom, usu_ape,usu_tipodocu,usu_docu,usu_email,usu_tel,usu_direc,usu_estado,usu_centro,usu_cargo,usu_pass) values(?,?,?,?,?,?,?,?,?,?,?,?)";

		$query=$pdo->prepare($sql);
		$query->execute(array($selecion,$nombre,$apellido,$tipodocu,$documento,$email,$telefono,$direccion,$estado,$centro,$cargo,$cifrar));

		Conexion::Cerrarbd();

	}//se modifica en la base de datos

	function Modificar($selecion,$nombre,$apellido,$tipodocu,$documento,$email,$telefono,$direccion,$estado,$centro,$cargo,$cifrar){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


		$sql="UPDATE  usuario set usu_nom=?, usu_ape=?,usu_tipodocu=?,usu_docu=?,usu_email=?,usu_tel=?,usu_direc=?,usu_estado=?,usu_centro=?,usu_cargo=? usu_pass=?";
		$query=$pdo->prepare($sql);
		$query->execute(array($selecion,$nombre,$apellido,$tipodocu,$documento,$email,$telefono,$direccion,$estado,$centro,$cargo,$cifrar));

		Conexion::Cerrarbd();

	}//se consulta en la base de datos

	function consultar_usuario(){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM usuario";

		$query=$pdo->prepare($sql);
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		return $result;

	}//se consulta por codigo en la base de datos
		function Consultarusuariocodigo($codigo){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM usuario WHERE usu_cod=?";

		$query=$pdo->prepare($sql);
		$query->execute(array($codigo));

		$result=$query->fetch(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();

		return $result;
	}


function cargar_rol(){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM rol";

		$query=$pdo->prepare($sql);
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		return $result;

	}

function Estado($estado,$codigo){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


		$sql="UPDATE  usuario set usu_estado=? WHERE usu_cod=? ";
		$query=$pdo->prepare($sql);
		$query->execute(array($estado,$codigo));

		Conexion::Cerrarbd();

	}//se consulta en la base de datos

function activo1($estado,$codigo){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


		$sql="UPDATE  usuario set usu_estado=? WHERE usu_cod=? ";
		$query=$pdo->prepare($sql);
		$query->execute(array($estado,$codigo));

		Conexion::Cerrarbd();

	}
}

?>
