<?php

require_once '../controlador/conexion.php';

function listInactived(){
    $cn = conect();
    $res =  $cn->query("SELECT * FROM login WHERE rol=0");
    disconect($cn);
    return $res;
}

function listRoles(){
    $cn = conect();
    $res = $cn->query("SELECT * FROM roles");
    disconect($cn);
    return $res;
}

function activateUser($username,$rol){
    $cn = conect();
    $res = $cn->query("UPDATE login SET rol=$rol WHERE nombreUsuario=$username");
    disconect($cn);
    return $res;
}

function listDocentes(){
    $cn = conect();
    $res =  $cn->query("SELECT l.* ,f.nombre,f.apellido FROM login l,formulario f WHERE  l.nombreUsuario=f.nombreUsuario and rol = 2");
    disconect($cn);
    return $res;
}
?>