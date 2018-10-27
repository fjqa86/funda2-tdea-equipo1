<?php
require_once '../controlador/conexion.php';

function save($name,$code){
    $cn = conect();
    $sql = "INSERT INTO `asignatura`(`nombreAsignatura`, `codigo`, `fechaCreacion`, `usuarioCreacion`, `estado`)
	VALUES 
	('".$name."'
	,'".$code."'
	,CURTIME()
	,'1017133368'
    ,'S')";
    $res =  $cn->query($sql);
    disconect($cn);
    
}

function listAll(){
    $cn = conect();
    $res =  $cn->query("SELECT * FROM asignatura");
    disconect($cn);
    return $res;
}

function listNoAsigned(){
    $cn = conect();
    $res =  $cn->query("SELECT * FROM asignatura WHERE docente =''");
    disconect($cn);
    return $res;
}

function updateDocente($idDocente,$codigo){
    $cn = conect();
    $sql = "UPDATE asignatura SET docente=".$idDocente." WHERE codigo=".$codigo;
    $res =  $cn->query($sql);
    disconect($cn);
    
}

?>