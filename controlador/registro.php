<?php
include_once 'conexion.php'; //llama a la conexión con la base de datos

$sql = "INSERT INTO `formulario`(`nombre`, `apellido`, `tipoDocumento`, `nombreUsuario`, `fechaNacimiento`, `genero`, `direccion`, `telefonoFijo`, `telefonoCelular`, `email`)
VALUES ('$_REQUEST[txtNombre]'
,'$_REQUEST[txtApellidos]'
,'$_REQUEST[txtTipoID]'
,'$_REQUEST[txtDocumento]'
,'$_REQUEST[txtFecha]'
,'$_REQUEST[txtGenero]'
,'$_REQUEST[txtDireccion]'
,'$_REQUEST[txtFijo]'
,'$_REQUEST[txtCelular]'
,'$_REQUEST[txtEmail]')";

$res = $conexion->query($sql);
if($res === FALSE){
	echo $sql;
	die("Problemas en el insert: ".mysqli_error());
}
 //Inserta en la tabla formulario los datos que son extraidos del formulario. En este caso el nombre de Usuario será la cédula de la persona

 $sql = "INSERT INTO `login`(`nombreUsuario`, `contrasena`)
 VALUES ('$_REQUEST[txtDocumento]','$_REQUEST[txtContrasena]')";
$res = $conexion->query("INSERT INTO `login`(`nombreUsuario`, `contrasena`)
	VALUES ('$_REQUEST[txtDocumento]','$_REQUEST[txtContrasena]')");
if($res === FALSE){
	echo $sql;
	die("Problemas en el insert: ".mysqli_error());
}
echo "Su Registro fue exitoso."; //Muestra un mensaje de registro exitoso 
header('refresh:2; url=../vista/ingreso.php'); // redirige después de 2 segundos a ingreso, para que pueda ingresar con el usuario que creó
?>    
		