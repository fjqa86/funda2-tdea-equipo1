<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Información general de la página -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/gif" href="../iconos/favicon.ico">  
  <title>Título de la Página</title>
  <!-- Llama los archivos de Bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery-ui.min.js"></script> 
</head>
<body>  

  <div class="container" style="border-top: none;
    border-bottom: none;
    border-width: 1px;
    border-style: ridge;">  <!-- Crea un contenedor, para que la página no sea de todo el ancho de la pantalla. En este caso se le crea un borde al contenedor -->
  <div class="jumbotron"> <!-- Así denomina bootstrap al espacio donde van los títulos y banner -->
        <div align="center">
        <img src="../imagenes/Banner.jpg" alt="Banner" width=100% >
      </div>
  </div>
    
  <div class="container">  <!-- Crea un nuevo contenedor -->
    <nav class="navbar navbar-default">    <!-- utiliza las etiquetes de bootstrap-->      
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <!-- crea un boton para cuando la pantalla sea pequeña lo que está dentro del #navbar se muestre en forma colapsada -->
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
          <?php
          session_start();
          if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
          echo "¡Bienvenido!  ". $_SESSION['username']; 
          //pregunta si está logueado, en caso afirmativo le dice Bienvenido y muestra el nombre de usuario
        } else {
        echo "Nombre de la Página web";//En caso contrario muestar Nombre de la Página Web
      }
      ?>
    </a>
  </div>
  <div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php"><span class="icon-home"></span>  Inicio</a></li> <!-- Ejemplo para ir al home-->
      <li class="dropdown"><!-- Ejemplo de menú desplegable-->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Desplegable <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>            
            <li role="separator" class="divider"></li>
            <li><a href="#">Link Separado</a></li>            
          </ul>
        </li>             
      <li><a href="../descargas/Tutorial.pdf" target="_blank"><span class="icon-clipboard"></span> Manual de Usuario</a></li><!-- Ejemplo de link normal-->
      </ul>
      <form class="navbar-form navbar-right"> <!-- En caso de estar conectado muestra cerrar sesión, en caso contrario muestra entrar-->
                <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                ?>
                <a class="btn btn-default" href="../controlador/cerrarSesion.php" role="button"><span class="icon-log-out"></span>  Salir</a>
                <?php                
              }else { 
              ?>
              <a class="btn btn-default" href="ingreso.php" role="button"><span class="icon-login"></span>  Entrar</a>             
              <?php     
            }
            ?>
          </form>             
        </div>      
    </nav>
    </div>

    <div class="container"> 
      <div class="row">
      <div class="col-xs-12 col-md-4 ">
        <img src="../imagenes/logo-ppal.jpg" width=100% alt="logo"  >
      </div>      
      <div class="hidden-sm hidden-xs col-md-4"  ">
        <img src="../imagenes/gel2.jpg" width=100% alt="escudos"  >
      </div>   
      <div class="hidden-xs col-md-4 ">
         <h1> Espacio para noticias </h1>
      </div>  
    </div>
  
