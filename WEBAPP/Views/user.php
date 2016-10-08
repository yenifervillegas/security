<?php
session_start();
if(!isset($_SESSION["usu_docu"])){
  header("Location:index.html");
}


?>

<html>
<head>
    <title>Security</title>

    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
    <link rel="stylesheet" href="css/jquery.dataTables.min.css" />

    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="dist/sweetalert.css">

    <link rel="stylesheet" type="text/css" href="css/styleMenu.css">
    <link rel="stylesheet" href="assets/css/main.css" />
    <script type="text/javascript">
  $(document).ready(function(){
       $('#myTable').DataTable({
      "scrollY": '50vh',
        "scrollCollapse": true,
        "paging":false,
      "language": {
        "url": "js/Spanish.json"
      }
  });
      
  });
  function salida(sld){

    location.href = "../Controller/controller.registro.producto.php?salidas="+sld+"&action=salidae";
  }
  </script>
</head>
<body>

  <div id="mainConte"><!--contiene todo el pagina-->
    <div id="barra1">
      <div id="conteS">
        <div id="icono"></div>
        <div id="nombre"><?php echo  $_SESSION["usu_nom"]  ?></div>
        <div onclick="sesion()"id="off"></div>
      </div>
    </div>
    <div id="e_left"><!--contiene todo el menu-->
      <div class="container">
        <div id="barra"></div>
        <div id="sidebar">
           <ul><!--<?php if($_GET["seccion=usu"] == "seccion=usu"){echo"class='active'";} ?>-->
          <li><a href="#" onclick="menu('inicio');">inicio</a></li>
          <li><a href="#user.php?seccion=rol" id="lirol" >Registro Rol</a></li>
          <li><a href="#user.php?seccion=usu" id="liUsuario" >Registro Usuario</a></li>
          <li><a href="#user.php?seccion=tipo" id="liproducto" onclick="menu('tipo_pro');">Tipo de Producto</a></li>
          <li><a href="#user.php?seccion=pro" id="liregiproducto" onclick="menu('regi_pro');">Registro Producto</a></li>
          <li><a href="#user.php?seccion=ace" id="liaccesorio" onclick="menu('accesorios');">Accesorios</a></li>
          <li><a href="#user.php?seccion=consul" id="lientrasal" onclick="menu('entra_sal');">Consulta de Entrada y salida</a></li>
        </ul>
        </div>
        <div class="main-content">
            <a href="#" data-toggle=".container" id="sidebar-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <div id="menu">Menu</div>
            <div class="content">
               
        
        </div>
        </div>

    </div>
    </div>
    <div  id="e_center"><!--contiene todo todos los formularios-->
      <div id="fondopan"></div>

      <div class="contenendor"></div> 


      </div>
    </div>
    
  </div>
</div>

    </div>
    </body>
</html>