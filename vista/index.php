    
     <?php
    // Llama al archivo con la cabecera, se recomienda hacerlo para no copiar y pegar este archivo en todas las páginas, dado que cuando se modifique la cabecera (banner, barra de navegación) el cambio se vea en todas las páginas
    include_once "header.php"
    ?>
    
    <!-- Bootstrap divide las páginas en filas y columnas. En este caso se crea una fila que tiene dos columnas, una de tamaño 8 y otra de tamaño 4. En total cada fila puede soportar hasta un espacio de 12.-->
      <div class="row">
        <div class="col-xs-12 col-md-8 "> <!-- Si se ve desde un dispositivo xs (osea un celular) va a ocupar todo el ancho. Si es un dispositivo mediano o más grande ocupará tamaño de 8 -->
          <img src="../imagenes/inscribete-vallavirtual01.jpg" alt="logo" width=100%  > <!-- la imagen es de ancho en porcentaje para que sea responsive y se adapte a la pantalla -->
          <!--El llamado a la imagen se hace indicando .. que significa bajar a la carpeta raiz, posteriormente ingresa a la carpeta imagenes y pone el nombre de la imagen --> 
        </div> 
          <div class="col-xs-12 col-md-4 ">
            <div class="row">               
              <img src="../imagenes/VV-01-35.jpg" alt="logo" width=100% >
            </div>
            <div class="row"> 
              <img src="../imagenes/VV-02-rendicion.jpg" alt="logo" width=100% >
            </div>
          </div>
    </div> 
     <div class="row"> <!-- una fila, compuesta por 4 imagenes del mismo ancho. En pantallas pequeñas y extra pequeñas serán ocultas -->
        <div class="hidden-sm hidden-xs col-xs-12 col-md-3 ">
          <img src="../imagenes/VV-04-apuntes2.jpg" alt="logo" width=100%  >
        </div> 
        <div class="hidden-sm hidden-xs col-xs-12 col-md-3 ">
          <img src="../imagenes/VV-05-maestria.jpg" alt="logo" width=100%  >
        </div>
        <div class="hidden-sm hidden-xs col-xs-12 col-md-3 ">
          <img src="../imagenes/VV-06-especializacion.jpg" alt="logo" width=100%  >
        </div>
        <div class="hidden-sm hidden-xs col-xs-12 col-md-3 ">
          <img src="../imagenes/VV-07-radio2.jpg" alt="logo" width=100%  >
        </div>
    </div> 
  
    <div class="row">
      <h1> Espacio para noticias </h1><br>
      <h2> Ejemplo de texto de tamaño dos </h2><br>
      <h3> Ejemplo de texto tamaño tres </h3><br>
      <h4> Ejemplo de texto tamaño cuatro </h4><br>
      <p> Ejemplo de texto dentro de un párrafo </p>      
    </div>

  <?php  
  include_once "footer.php" //llama al archivo del pie de página
  ?>
</div>

 </body>
 </html>





