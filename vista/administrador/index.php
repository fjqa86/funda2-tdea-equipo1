    
     <?php
    // Llama al archivo con la cabecera, se recomienda hacerlo para no copiar y pegar este archivo en todas las páginas, dado que cuando se modifique la cabecera (banner, barra de navegación) el cambio se vea en todas las páginas
    include_once "../header.php"
    ?>

    <div class="row">
      <h1> Administrador</h1><br>
      <h2> <a href="../../controlador/usuarios.php">Activar usuarios </a></h2><br>
      <h2> <a href="../../controlador/asignatura.php">Registrar Asignatura </a></h2><br>
      <h3> <a href="../../controlador/asignarmateria.php">Asignar docente a la asignatura</a></h2><br>

    </div>

  <?php  
  include_once "../footer.php" //llama al archivo del pie de página
  ?>
</div>

 </body>
 </html>





