<?php
    /* Llama al archivo con la cabecera */
    include_once "../vista/header.php"
    ?> 

    <div class="jumbotron">
      <div class="container">
        <h1 class="featurette-heading">Ingreso<span class="text-muted"> de contenido  el Tecnológico de Antioquia.</span></h1><br><br>
        <p class="lead">Ingresar  contenido a asignatura. </p> 
      </div>  
    </div>

    <form id="frmIngresoContenido" action="?action=save" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <fieldset class="leyenda" > <legend class="stiloLeyenda">Contenido</legend>
      <div class="col-xs-12 col-sm-6 ">
        <div class="form-group">
            <label for="txttitulo">Titulo<span><em>(requerido)</em></span></label>
            <input type="text" class="form-control" id="txttitulo" placeholder="Titulo contenido" name="txttitulo" required value="<?php if(!empty($data)){ echo $data['txttitulo'];} ?>">
        </div>
        
        <div class="form-group">
            <label for="txtdescripcion">Descripción<span><em>(requerido)</em></span></label>
            <input type="text" class="form-control" id="txtdescripcion" placeholder="Descripcion contenido" name="txtdescripcion" required value="<?php if(!empty($data)){ echo $data['txtdescripcion'];} ?>">
        </div>

        <div class="form-group">
            <label for="txtfile">Archivo<span><em></em></span></label>
            <input type="file" class="form-control" id="txtfile" placeholder="Archivo contenido" name="txtfile">
        </div>
s
        <div class="form-group">
            <label for="Asignatura">Asignatura<em>(requerido)</em></span></label>
             <select class="form-control" name="txtasignatura">
            <option value="">-- Seleccione --</option>
            <?php echo $option ?>
          </select> 
        </div>


      </div>

      <div class="col-xs-12 col-sm-10 " style="margin-top: 20px">
        <div class="form-group">
          <button class="btn btn-primary" type="submit" style="margin-right:12px"><span class="icon-user-check"></span>  Guardar</button>
          <button class="btn btn-default" type="reset"><span class="icon-cw"></span>  Restablecer</button>
        </div>
      </div>
      
    </fieldset>

  </form>
  <?php echo $table ?>
</section>
<?php
include_once "../vista/footer.php"
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
