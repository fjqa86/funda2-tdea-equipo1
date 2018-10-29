<?php
require_once '../controlador/conexion.php';

function saveContenido($codasignatura,$titulo,$des,$adjunto){
    $cn = conect();
    $sql = "INSERT INTO `contenido`( `codasignatura`, `titulo`, `des`, `adjunto`)
	VALUES 
	('".$codasignatura."'
	,'".$titulo."'
	,'".$des."'
	,'".$adjunto."'
    )";
    $res =  $cn->query($sql);
    disconect($cn);
    
}

function listAll(){
    $cn = conect();
    $res =  $cn->query("SELECT * FROM contenido");
    disconect($cn);
    return $res;
}

function listContenidoByDocenteAndAsignatura($idDocente,$idAsignatura){
    $cn = conect();
    if(empty($idAsignatura)){
        $res =  $cn->query("SELECT * FROM contenido WHERE codasignatura in (select codigo from asignatura WHERE docente ="
        .$idDocente.")");
    }else{
        $res =  $cn->query("SELECT * FROM contenido WHERE codasignatura ="
        .$idAsignatura.")");
    }

    disconect($cn);
    return $res;
}


?>