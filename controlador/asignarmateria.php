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
        $codigo = $_GET('codigo');
        updateDocente($idDocente,$codigo);
        message('Se ha asigando la materia al docente correctamente');
        $data = array();
    }
}

if(empty($view)){
    $list = listNoAsigned();

    $users = listDocentes();
   
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
                .'<td>';
                if($users->num_rows > 0){
                 
                    $option ='<select class="form-control" name="txtrol">';
                    while($user = $users->fetch_object()){
                        if(!empty($asignatura->docente) and $asignatura->docente==$user->nombreUsuario){
                            $option.= '<option value='.$user->nombreUsuario.' selected>'.$user->nombreUsuario.'</option>';
                        }else{
                            $option.= '<option value='.$user->nombreUsuario.' >'.$user->nombreUsuario.'</option>';
                        }
                        
                    }
                    $option.='</select>';
                    $table.=$option;
                }
                '</td>'.
                '<td> <a href="asignarmateria.php?action="save"&codigo='.$asignatura->codigo.')>Aprobar</a></td>
              </tr>';
        }
        $table .=   ' </tbody>
        </table>';
    }else{
        $table = 'No hay resultados';
    }

    require ('../vista/docente/asignarmateria.php'); 
}



function message($msn){
    $success = '    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
    $msn.
  '</div>';
}
?>