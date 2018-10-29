<?php

require '../modelo/asignatura.php';
require '../modelo/usuarios.php';


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
        $codigo = $_REQUEST['txtcodigo'];
        $idDocente = $_REQUEST['txtusuario'];
        updateDocente($idDocente,$codigo);
        message('Se ha asigando la materia al docente correctamente');
        $data = array();
    }
}

if(empty($view)){
    $list = listNoAsigned();

    $users = listDocentes();
   
    if(!empty($_GET['data'])){
        $tmp = unserialize($_GET['data']);
        $data['txtcodigo'] = $tmp->codigo;
        $data['txtusuario'] = $tmp->docente;
    }
    if ($list->num_rows > 0) 
       {  
        $table = '<table class="table">
        <thead>
          <tr>
            <th scope="col">Asignatura</th>
            <th scope="col">Usuario</th>
          </tr>
        </thead>
        <tbody>';
        while ($asignatura = $list->fetch_object()) {
            $table .= '
              <tr>
                <th scope="row">'.$asignatura->nombreAsignatura.'</th>'
                .'<td>'
                .$asignatura->docente.
                '</td>'.
                '<td> <a href="asignarmateria.php?data='.urlencode(serialize($asignatura)).'")>Editar</a></td>
              </tr>';
        }
        $table .=   ' </tbody>
        </table>';
    }else{
        $table = 'No hay resultados';
    }

    $option ='';
    while($user = $users->fetch_object()){
        if(!empty($data['txtusuario']) and $data['txtusuario'] == $user->nombreUsuario){
            $option.= '<option value='.$user->nombreUsuario.' selected>'.$user->nombre.' '.$user->apellido.'</option>';
        }else{
            $option.= '<option value='.$user->nombreUsuario.' >'.$user->nombre.' '.$user->apellido.'</option>';
        }
        
    }
    require ('../vista/administrador/asignarmateria.php'); 
}



function message($msn){
    $success = '    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
    $msn.
  '</div>';
}
?>