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
?>