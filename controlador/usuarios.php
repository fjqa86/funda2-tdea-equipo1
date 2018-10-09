<?php

require '../modelo/usuarios.php';


$view;
$action;
$selected;

if(!empty($_GET['view'])){
    $view = $_GET['view'];
}

if(empty($view)){
    $list = listInactived();

    if ($list->num_rows > 0) 
       {  
        $table = '<table class="table">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Rol</th>
          </tr>
        </thead>
        <tbody>';
        while ($user = $list->fetch_object()) {
            $table .= '
              <tr>
                <th scope="row">'.$user->nombreUsuario.'</th>'
                .'<td>'.$user->rol.'</td>
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
            $optionRoles .= '<option value='.$rol->ideal.'>'.$rol->nomrol.'</option>';
        }
    }
    require ('../vista/administrador/usuarios.php'); 
}

?>