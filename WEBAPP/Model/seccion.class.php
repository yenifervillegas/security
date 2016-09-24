<?php
  class dashboard{

    public static function pagina(){
      if (isset($_GET["seccion"])) {
  			$ventana = $_GET["seccion"];

          switch ($ventana) {
           
             case 'usu':
              include("registro.usuario.php");
              break;
             case 'tipo':
              include("registro.tipoproducto.php");
              break;      
            case 'pro':
              include("registro.registro_producto.php");
              break;
            case 'ace':
              include("registrar.accesorio.php");
              break;
            case 'consul':
              include("consulta.entrada_salida.php");
              break;
              
            default:

          break;
        }
  		}else {
  			$ventana = "";
  		}
    }
  }

?>
