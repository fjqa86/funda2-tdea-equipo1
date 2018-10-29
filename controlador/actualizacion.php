<?php

/*
daniel hermoso
*/
require '../modelo/asignatura.php';

$view;
$action;
$selected;
$data = array();
$success="";

if(!empty($_GET['view'])){
    $view = $_GET['view'];
}

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}

if(!empty($action)){
    if($action =="save"){
        $idAsignatura = $_GET('idAsignatura');
        updateEstado($idAsignatura,'publicada');
        message('se cambio a estado activo correctamente');
        $data = array();
    }
}

if(empty($view)){
    $list = listExperto();

    if ($list->num_rows > 0) 
       {  
        $table = '<table class="table">
        <thead>
          <tr>
            <th scope="col">nombreasignatura</th>
            <th scope="col">codigo</th>
            <th scope="col">estado</th>
          </tr>
        </thead>
        <tbody>';
        while ($asignatura = $list->fetch_object()) {
            $table .= '
              <tr>
                <th scope="row">'.$asignatura->nombreAsignatura.'</th>'
                .'<td>'.$asignatura->codigo.'</td>'.
                '<td> <a href="actualizacion.php?action=save&idAsignatura='.$asignatura->codigo.'" >Editar</a></td>
              </tr>';
        }
        $table .=   ' </tbody>
        </table>';
    }else{
        $table = 'No hay resultados';
    }

    require ('../vista/mproduccion/mdeproduccion.php'); 
}
