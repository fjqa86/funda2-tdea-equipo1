
<?php
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
        save($_REQUEST['txtname'],$_REQUEST['txtcode']);
        message('Se grabò la asignatura correctamente');
        $data = array();
    }
}

if(empty($view)){
    if(!empty($_GET['data'])){
        $tmp = unserialize($_GET['data']);
        $data['txtname'] = $tmp->nombreAsignatura;
        $data['txtcode'] = $tmp->codigo;
    }
    $list = listAll();

    if ($list->num_rows > 0) 
       {  
        $table = '<table class="table">
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>';
        while ($asignatura = $list->fetch_object()) {
            $table .= '
              <tr>
                <th scope="row">'.$asignatura->nombreAsignatura.'</th>'
                .'<td>'.$asignatura->codigo.'</td>'.
                '<td> <a href="asignatura.php?data='.urlencode(serialize($asignatura)).'" >Editar</a></td>
              </tr>';
        }
        $table .=   ' </tbody>
        </table>';
    }else{
        $table = 'No hay resultados';
    }

    require ('../vista/administrador/asignatura.php'); 
}



function message($msn){
    $success = '    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
    $msn.
  '</div>';
}	

?>

