<?php
require('Conexion.php');

$conex = Conexion::getInstance();

$nombreProducto = $_REQUEST['nombreProducto'];
$consulta = $conex->consultar("select * from producto where nombre = '". $nombreProducto."'");

if($consulta != null) {
	echo 'false';
} else{
	echo 'true';
}
?>
