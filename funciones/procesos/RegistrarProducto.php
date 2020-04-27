<?php
require('Conexion.php');
$conex = Conexion::getInstance();

	$target_path = $_SERVER['DOCUMENT_ROOT'];
	$target_path .= "/carrito/dist/img/tienda";
	$target_path = $target_path  . "/" .basename($_FILES['imagen']['name']); 
	if(!copy($_FILES['imagen']['tmp_name'], $target_path)) { 
		echo "Ha ocurrido un error, trate de nuevo!";
	} else {
		$valoresUsuario = array(
		':nombreProducto' => $_POST['nombreProducto'],
		':marca' => $_POST['marca'],
		':precio' => $_POST['precio'],
		':imagen' => basename($_FILES['imagen']['name']));

		$sentencia = $conex->ejecutarAccion("INSERT INTO producto VALUES (null, :nombreProducto, :marca, :precio, :imagen)", $valoresUsuario);

		if($sentencia == true) {
		    echo 'ok';
		} else{
		    echo 'error';
		}
	}

//Cerramos Conexión
$conex->cerrarConex();
?>