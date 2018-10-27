<?php

include_once 'conexion.php'; //llama al archivo de conexión de la base de datos
   $res=$conexion->query("SELECT  `nombreUsuario`, `contrasena`,`rol` FROM `login` WHERE  `nombreUsuario`='$_REQUEST[nomusuario]' AND  `contrasena`='$_REQUEST[conusuario]' ") ; // selecciona de la tabla login el valor de nombreUsuario y de contrasena en caso de que los valores ingresados en el formulario sean correctos y concuerden con los almacenados en la base da datos. El nombre de la variable dentro del Request es el usado en el formulario.
   if($res === FALSE){
	echo $sql;
	die("Problemas en el insert: ".mysqli_error());
    }
   if ($res->num_rows > 0) // en caso de que registro haya encontrado alguna variable hará lo siguiente
       {  
          
          $rol = 0;
          while ($user = $res->fetch_object()) {
           $rol = $user->rol;
            }
            if($rol > 0 ){
                session_start(); // inica sesión
                $_SESSION['loggedin'] = true; // indica que hay una sesión activa
                $_SESSION['username'] =$_REQUEST['nomusuario'];  // Guarda el nombre del usuario como una variable de sesión, esto le permitirá ser usado para otras consultas                     
            }
         
            switch ($rol) {
                case 0:
                    echo "Usuario pendiente de activación";
                    header('refresh:2; url=../vista/ingreso.php');  // muestra el mensaje dos segundos y redirige al menú de ingreso
                    break;
                case 1:
                    header("Location: ../vista/administrador/index.php");   //redirige al index pero ya la persona estará autenticada    
                    break;
                    
                case 2:
                    header("Location: ../vista/docente/index.php");
                    break;
            }
                   
        } 

    else {
       echo "Contraseña equivocada"; // en caso contrario imprime un mensaje de Contraseña equivocada
       header('refresh:2; url=../vista/ingreso.php');  // muestra el mensaje dos segundos y redirige al menú de ingreso
    }
?>

