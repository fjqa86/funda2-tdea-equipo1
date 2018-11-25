<?php

require '../modelo/asignatura.php';

/*
Marlon y maicol
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

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}


if(empty($view)){
    $list = listAsignaturaByDocente($_SESSION['username']);
   
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
            '<td> <a href="ingresarContenido.php")>VER</a></td>
            </tr>';
              


        }
        $table .=   ' </tbody>
        </table>';
    }else{
        $table = 'No hay resultados';
    }

    require ('../vista/docente/verproducto.php'); 
}