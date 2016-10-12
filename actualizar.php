<?php
//Obtenemos las variables o los valores de cada uno de los campos del formulario anterior 
$id= $_GET['id'];
$documento= $_GET['documento'];
$nombre= $_GET['nombre'];
$apellido= $_GET['apellido'];
$fecha= $_GET['fecha'];
$rh= $_GET['rh'];

//Actualize de la tabla tb_usuario a documento por $documento, nombre por $nombre, etc, donde documento=$id
$sql="UPDATE tb_usuario SET documento='$documento', nombre='$nombre', apellido='$apellido',fecha_nacimiento='$fecha', rh='$rh' WHERE documento='$id' ";
$conexion=mysqli_connect('localhost','root','','bd_analizi');//Hacemos la conexion a la bese de datos 
$resultado=$conexion->query($sql);//En la variable resultado traeremos las modificaciones
//Y listo este es todo el codigo para actualizar.

//Este if es para decir si la conexion modifico algun rejistro envie un mensaje anunciando.
if ($conexion-> affected_rows>0) {
	Echo "has modificado un rejistro";
	}else{
		echo "No se pudo modificar";
	}
?>