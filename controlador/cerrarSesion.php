<?php
session_start(); //llama la sesión que ha tenido abierta
unset ($SESSION['username']); // deja de relacionar la variable username
session_destroy(); // finaliza la sesión
header('Location: ../index.php');    //redirecciona al index 
exit(); 
?>
