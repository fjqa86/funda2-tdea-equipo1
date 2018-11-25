<?php

require_once '../modelo/contenido.php';
require_once '../modelo/asignatura.php';


$view;
$action;
$selected;
$data = array();
$success="";
session_start();
$_SESSION['username'];

if(!empty($_GET['view'])){
    $view = $_GET['view'];
}

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}

if(!empty($action)){
    if($action =="save"){
        move_uploaded_file($_FILES['txtfile']['tmp_name'],$_FILES['txtfile']['name']);
        
        saveContenido($_REQUEST['txtasignatura'],$_REQUEST['txttitulo'],$_REQUEST['txtdescripcion'],'imagenes/upload/'.$_FILES['txtfile']['tmp_name']);
        message('Se ingreso el contenido correctamente');
        $data = array();
    }
}

if(empty($view)){
    $list = listContenidoByDocenteAndAsignatura($_SESSION['username'],'');
   
    if ($list->num_rows > 0) 
       {  
        $table = '<table class="table">
        <thead>
          <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Descripción</th>
            <th scope="col">Asignatura</th>
          </tr>
        </thead>
        <tbody>';
        while ($contenido = $list->fetch_object()) {
            $table .= 
            '<tr>
            <td scope="row">'.$contenido->titulo.'</td>'.'
            <td scope="row">'.$contenido->des.'</td>'.
            '<td> '.$contenido->codasignatura.'</td>
            </tr>';
              


        }
        $table .=   ' </tbody>
        </table>';
    }else{
        $table = 'No hay resultados';
    }

    $asignaturas = listAsignaturaByDocente($_SESSION['username']);
    if($asignaturas->num_rows > 0){
        $option ="";
        while($item = $asignaturas->fetch_object()){
                $option .= '<option value='.$item->codigo.'>'.$item->nombreAsignatura.'</option>';
            
        }
    }
    require ('../vista/docente/contenido.php'); 
}
function message($msn){
    $success = '    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
    $msn.
  '</div>';
}
?>