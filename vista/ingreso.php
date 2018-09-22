    <?php
    /* Llama al archivo con la cabecera */
    include_once "header.php"
    ?>   
   
      <div class="jumbotron">
        <div class="container">
         <h1 class="featurette-heading" style="text-align:center">Bienvenidos <span class="text-muted">Tecnológico de Antioquia.</span></h1><br><br>
         <p class="lead" style="text-align:center">Ingrese su usuario y contraseña para ingresar al aplicativo </p>
       </div>
     </div>

     <div class="container">
      <form class="form-signin" action="../controlador/login.php" method="post">     <!-- envía el formulario a login.php que está en la carpeta controlador -->
        <h2 class="form-signin-heading" align="center">Entrar</h2>
        <div class="col-xs-4 col-xs-offset-4"> 
        <div class="form-group" align="center">                
          <input type="text" id="nomusuario" name="nomusuario" class="form-control" placeholder="Nombre de usuario" required>
        </div>      
        <div class="form-group" align="center">           
          <label for="inputPassword" class="sr-only">Contraseña</label>
          <input type="password" id="conusuario" name="conusuario" class="form-control" placeholder="Contraseña" required>
        </div>   
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me">Recordar nombre de usuario.
          </label>
        </div>        
        <button class="btn btn-primary " type="submit" >Entrar</button>   <!-- al dar clic al botón, envía la información a lo indicado en form -->
        <a class="btn btn-warning " href="registro.php" role="button"><span class="icon-add-user"></span>  Registrarse</a>
        </div>     
        </form>    
    </div> <!-- /container -->
  
  <?php
  include_once "footer.php"
  ?>

     <!-- Bootstrap core JavaScript
     ================================================== -->
     <!-- Placed at the end of the document so the pages load faster -->
     <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>-->
     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>
   </body>
   </html>
