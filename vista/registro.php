   <?php
    /* Llama al archivo con la cabecera */
    include_once "header.php"
    ?> 

    <div class="jumbotron">
      <div class="container">
        <h1 class="featurette-heading">Registro <span class="text-muted"> para el Tecnológico de Antioquia.</span></h1><br><br>
        <p class="lead">Realice el registro para luego poder acceder a la web y así continuar diligenciando el formulario de  convocatoria docente. </p> 
      </div>  
    </div>

    <form id="preRegistro" action="../controlador/registro.php" method="post">
    <div class="form-group">
    <fieldset class="leyenda" > <legend class="stiloLeyenda">Datos Personales</legend>
      <div class="col-xs-12 col-sm-6 ">
        <div class="form-group">
            <label for="NombreCompleto">Nombre Completo<span><em>(requerido)</em></span></label>
            <input type="text" class="form-control" id="NombreCompleto" placeholder="Nombre Completo" name="txtNombre" required>
        </div>
        <div class="form-group">
            <label for="Apellidos">Apellidos<span><em>(requerido)</em></span></label>
            <input type="text" class="form-control" id="Apellidos" placeholder="Apellidos" name="txtApellidos" required>
        </div>

        <div class="form-group">
            <label for="TipoDocumento">Tipo de Documento<span><em>(requerido)</em></span></label>
             <select class="form-control" name="txtTipoID">
            <option value="">-- Seleccione --</option>
            <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
            <option value="Cédula de Extranjería">Cédula de Extranjería</option>
            <option value="Documento Extranjería">Documento de Extranjería</option>
            <option value="Registro Civil">Registro Civil</option>
            <option value="Pasaporte">Pasaporte</option>
          </select> 
        </div>

        <div class="form-group">
            <label for="NumeroDocumento">Número documento de Identidad<span><em>(requerido)</em></span></label>
            <input type="number" class="form-control" id="NombreCompleto" name="txtDocumento" placeholder="Documento de Identidad" required>
        </div>
        <div class="form-group">
            <label for="FechaNacimiento">Fecha de Nacimiento<span><em>(requerido)</em></span></label>
            <input type="date" class="form-control" id="FechaNacimiento" placeholder="Fecha de Nacimiento" name="txtFecha" required>
        </div>
        <div class="form-group">
            <label for="Genero">Género<span><em>(requerido)</em></span></label>
            <select class="form-control" name="txtGenero" >
            <option value="">-- Seleccione --</option>
            <option value="Cédula de Ciudadanía">Masculino</option>
            <option value="Cédula de Extranjería">Femenino</option>
            <option value="Documento Extranjería">Otro</option>           
          </select> 
        </div>

      </div>

      <div class="col-xs-12 col-sm-6 ">
        <div class="form-group">
            <label for="E-mail">Correo Electrónico<span><em>(requerido)</em></span></label>
            <input type="email" class="form-control" id="E-Mail" name="txtEmail" placeholder="Correo Electrónico" required>
        </div>
        <div class="form-group">
            <label for="Celular">Teléfono Celular</label>
            <input type="tel" class="form-control" id="Celular" name="txtCelular" placeholder="Celular" >
        </div>
        <div class="form-group">
            <label for="Fijo">Teléfono Fijo</label>
            <input type="tel" class="form-control" id="Fijo" name="txtFijo" placeholder="Teléfono Fijo" >
        </div>
        <div class="form-group">
            <label for="Fijo">Dirección</label>
            <input type="text" class="form-control" id="Fijo" name="txtDireccion" placeholder="Dirección" >
        </div>
        <div class="form-group">
            <label for="Fijo">Contraseña<span><em>(requerido)</em></span></label>
            <input type="password" class="form-control" id="Contra" name="txtContrasena" minlength="5" placeholder="Contraseña" required>
        </div>
         <div class="form-group">
            <label for="Fijo">Confirmar Contraseña<span><em>(requerido)</em></span></label>
            <input type="password" class="form-control" id="Fijo" name="txtConfContrasena" minlength="5" placeholder="Confirme Contraseña" required>
        </div>
      </div>

      <div class="col-xs-12 col-sm-10 " style="margin-top: 20px">
        <div class="form-group">
          <button class="btn btn-primary" type="submit" style="margin-right:12px"><span class="icon-user-check"></span>  Registrarse</button>
          <button class="btn btn-default" type="reset"><span class="icon-cw"></span>  Restablecer</button>
        </div>
      </div>
      
    </fieldset>

  </form>
</section>
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
