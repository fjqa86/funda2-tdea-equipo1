<?php
    $conexion= new mysqli("localhost","root","","funda"); // parametros url, usaurio,password, base dedatos, crea una conexion a la bd
    $conexion->set_charset("utf8");

    function conect(){
        $con= new mysqli("localhost","root","","funda"); // parametros url, usaurio,password, base dedatos, crea una conexion a la bd
        $con->set_charset("utf8");
        return $con;
    }

    function disconect($con){
        mysqli_close($con);
    }
?>   
