  
  
  	<?php 
		include_once"../header.php"
	?>
	<?php
	include 'conexion.php';
 	$sql = "INSERT INTO `asignatura`(`nombreAsignatura`, `codigo`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModif`, `estado`)
	VALUES 
	('$_REQUEST[nombreAsignatura]'
	,'$_REQUEST[codigo]'
	,'$_REQUEST[fechaCreacion]'
	,'$_REQUEST[fechaModificacion]'
	,'$_REQUEST[usuarioCreacion]'
	,'$_REQUEST[usuarioModif]'
    $res = $conexion->query($sql);
		if($res === FALSE){
		echo $sql;
		die("Problemas en el insert: ".mysqli_error());
		}else{
		echo "conexion exitosa";
		}
?>
<?php
		include_once"../footer.php" 
	?>
