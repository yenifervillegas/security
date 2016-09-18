<?php
	class Conexion{
		private static $bdhost="localhost";
		private static $bdname="security";
		private static $bduser="root";
		private static $bdpass="";

		private static $conex=null;

		public static function Abrirbd(){
			if(self::$conex==null){
				try {
					self::$conex=new PDO('mysql:host='.self::$bdhost.';dbname='.self::$bdname.';charset=utf8',self::$bduser, self::$bdpass);
					self::$conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					//echo "BD abierta";
				}
				catch(PDOException $e){
					echo $e->getMessage();
				}
			}return self::$conex;
		}
		public static function Cerrarbd()
		{
			self::$conex=null;
			//echo "BD cerrada";
		}
	}
?>