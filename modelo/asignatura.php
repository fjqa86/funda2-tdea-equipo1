<?php
require_once '../controlador/conexion.php';

function saveAsignatura($name,$code){
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

function listAsignaturas(){
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

/*
daniel hermoso
*/
function updateEstado($idAsignatura,$estado){
    $cn = conect();
    $sql = "UPDATE asignatura SET estado=".$estado." WHERE codigo=".$idAsignatura;
    $res = $cn->query($sql);
    disconect($cn);

}

/*
daniel hermoso
*/
function listExperto(){
    $cn = conect();
    $res = $cn->query("SELECT * FROM asignatura WHERE estado = 'S'");
    disconect($cn);
    return $res; 
}

/*
fjqa86
*/
function listAsignaturaByDocente($idDocente){
    $cn = conect();
    $res =  $cn->query("SELECT * FROM asignatura WHERE docente =".$idDocente);
    disconect($cn);
    return $res;
}

?>