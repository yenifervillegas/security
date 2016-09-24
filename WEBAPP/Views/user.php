<html>
<head>
    <title>Security</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styleMenu.css">
    <link rel="stylesheet" href="assets/css/main.css" />

    <script type="text/javascript"src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>

</head>
<body>

  <div id="mainConte"><!--contiene todo el pagina-->
    <div id="barra1">

      <div onclik="sesion('cerrasesion')"id="off"></div>
    </div>
    <div id="e_left"><!--contiene todo el menu-->
      <div class="container">
        <div id="barra"></div>
        <div id="sidebar">
           <ul>
          <li><a href="#" onclick="menu('inicio');">inicio</a></li>
          <li><a href="#user.php?seccion=usu" id="liUsuario" onclick="menu('regi_usu');">Registro Usuario</a></li>
          <li><a href="#user.php?seccion=tipo" id="liproducto" onclick="menu('tipo_pro');">Tipo de Producto</a></li>
          <li><a href="#" id="liregiproducto" onclick="menu('regi_pro');">Registro Producto</a></li>
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
    <div id="e_center"><!--contiene todo todos los formularios-->
      <div id="fondopan"></div>


      <div id="registrousu"></div>
      <div id="TipodeProducto"></div>
      <div id="registroProducto"></div>
      <div id="accesorios"></div>
      <div id="entradaysalida"></div>



      </div>
    </div>
    
  </div>
</div>

    </div>
    </body>
</html>