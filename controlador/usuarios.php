<?php

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
        activateUser($_REQUEST['txtusername'],$_REQUEST['txtrol']);
        message('Se activado el usuario correctamente');
        $data = array();
    }
}

if(empty($view)){
    if(!empty($_GET['data'])){
        $tmp = unserialize($_GET['data']);
        $data['txtusername'] = $tmp->nombreUsuario;
        $data['txtrol'] = $tmp->rol;
    }
    $list = listInactived();

    if ($list->num_rows > 0) 
       {  
        $table = '<table class="table">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Rol</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>';
        while ($user = $list->fetch_object()) {
            $table .= '
              <tr>
                <th scope="row">'.$user->nombreUsuario.'</th>'
                .'<td>'.$user->rol.'</td>'.
                '<td> <a href="usuarios.php?data='.urlencode(serialize($user)).'" >Editar</a></td>
              </tr>';
        }
        $table .=   ' </tbody>
        </table>';
    }else{
        $table = 'No hay resultados';
    }
    $roles = listRoles();
    if($roles->num_rows > 0){
        $optionRoles ="";
        while($rol = $roles->fetch_object()){
            if(!empty($data['rol']) and $data['rol']==$rol->ideal){
                $optionRoles .= '<option value='.$rol->ideal.' selected>'.$rol->nomrol.'</option>';
            }else{
                $optionRoles .= '<option value='.$rol->ideal.'>'.$rol->nomrol.'</option>';
            }
            
        }
    }
    require ('../vista/administrador/usuarios.php'); 
}



function message($msn){
    $success = '    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
    $msn.
  '</div>';
}
?>