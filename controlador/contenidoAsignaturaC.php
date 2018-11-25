<?php

require '../modelo/asignatura.php';
require '../modelo/contenido.php';

/*
Daniel,maicol y marlon forever 
*/

$view;
$action;
$selected;
$data = array();
$success="";
session_start();


if(!empty($_GET['view'])){
    $view = $_GET['view'];
}
$tableContenido="";
if(!empty($_GET['action'])){
    $action = $_GET['action'];
    echo $action;
    if($action == "ver"){
        echo $_GET['idAsignatura'];
        $listCon = listContenidoByAsignatura($_GET['idAsignatura']);
   
    if ($listCon->num_rows > 0) {
        $tableContenido = '<table class="table">
        <thead>
          <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Descripción</th>
            <th scope="col">Asignatura</th>
          </tr>
        </thead>
        <tbody>';
        while ($contenido = $listCon->fetch_object()) {
            $table .= 
            '<tr>
            <td scope="row">'.$contenido->titulo.'</td>'.'
            <td scope="row">'.$contenido->des.'</td>'.
            '<td> '.$contenido->codasignatura.'</td>
            </tr>';
              


        }
        $tableContenido .=   ' </tbody>
        </table>';
    }else{
        $tableContenido = 'No hay contenidos ';
    }
    }
}


if(empty($view)){
    $list = listExperto();
   
    if ($list->num_rows > 0) 
       {  
        $table = '<table class="table">
        <thead>
          <tr>
            <th scope="col">Asignatura</th>
            <th scope="col">estado</th>
            <th scope="col">ver</th>
          </tr>
        </thead>
        <tbody>';
        while ($contenido = $list->fetch_object()) {
            $table .= 
            '<tr>
            <th scope="row">'.$contenido->nombreAsignatura.'</th>'.'
            <th scope="row">'.$contenido->estado.'</th>'.
            '<td> <a href="contenidoAsignaturaC.php?action=ver&idAsignatura='.$contenido->codigo.'")>VER</a></td>
            </tr>';
              


        }
        $table .=   ' </tbody>
        </table>';
    }else{
        $table = 'No hay resultados';
    }


    require ('../vista/cordinador/verproducto.php'); 
}