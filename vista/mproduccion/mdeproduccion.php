
<?php
    /* 
    Daniel hermoso
    Llama al archivo con la cabecera */
    include_once "../vista/header.php"
    ?> 

<div class="jumbotron">
      <div class="container">
        <h1 class="featurette-heading">Publicación <span class="text-muted"> de asignatura para el Tecnológico de Antioquia.</span></h1><br><br>
        <p class="lead">Active la asignatura en la plataforma. </p> 
      </div>  
    </div>

    <?php echo $table ?>
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
