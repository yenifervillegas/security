
<?php
//tipoproducto.class.php
class Gestion_Tipoproducto{
	function Guardar($tipopro_cod, $tipopro_nombre, $tipopro_desc)
	{
		$pdo=Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql="INSERT INTO tipo_producto (tipopro_cod, tipopro_nombre, tipopro_desc) VALUES(?,?,?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($tipopro_cod, $tipopro_nombre, $tipopro_desc));

		Conexion::Cerrarbd();
	}
	function ConsultarTodo()
	{
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM tipo_producto ORDER BY tipopro_nombre";
		$query= $pdo->prepare($sql);
		$query->execute();

		$result = $query->fetchAll(PDO::FETCH_BOTH);
		Conexion::Cerrarbd();
		return $result;
	}
	function cargar_tipo(){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM tipo_producto";

		$query=$pdo->prepare($sql);
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		return $result;

	}
	function Modificar($tipopro_cod, $tipopro_nombre, $tipopro_desc)
	{
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "UPDATE tipo_producto SET tipopro_nombre = ?, tipopro_desc = ? WHERE tipopro_cod = ?";
		$query= $pdo->prepare($sql);
		$query->execute(array($tipopro_nombre, $tipopro_desc, $tipopro_cod));
		Conexion::Cerrarbd();
	}

	function Eliminar($tipopro_cod)
	{
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "DELETE  FROM tipo_producto Where tipopro_cod = ?";
		$query= $pdo->prepare($sql);
		$query->execute(array($tipopro_cod));


		Conexion::Cerrarbd();
	}
	function ConsultarPorCodigo($codigo){
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM tipo_producto WHERE tipopro_cod = ?";
		$query= $pdo->prepare($sql);
		$query->execute(array($codigo));

		$result = $query->fetch(PDO::FETCH_BOTH);
		Conexion::Cerrarbd();
		return $result;
	}
}

?>
