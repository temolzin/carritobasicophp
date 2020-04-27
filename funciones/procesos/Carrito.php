<?php
	session_start();
	require('Producto.php');
	$idProducto = $_POST['articulo'];
    require 'Conexion.php';
    $conex = Conexion::getInstance();
    $consulta = $conex->consultar("select * from producto where id_producto = ". $idProducto);
	$productos = array();
    foreach ($consulta as $row) {
    	$producto = new Producto();    
    	$producto->setIdProducto($row['id_producto']);
    	$producto->setNombreProducto($row['nombre']);
    	$producto->setMarca($row['marca']);
    	$producto->setPrecio($row['precio']);
    	$producto->setImagen($row['imagen']);
    	array_push($productos, $producto);
    }

    foreach ($productos as $producto) {
        $_SESSION['idProducto'][$producto->getIdProducto()] = $producto->getIdProducto();
        $_SESSION['nombreProducto'][$producto->getIdProducto()] = $producto->getNombreProducto();
        $_SESSION['marca'][$producto->getIdProducto()] = $producto->getMarca();
        $_SESSION['imagen'][$producto->getIdProducto()] = $producto->getImagen();
        $_SESSION['precio'][$producto->getIdProducto()] = $producto->getPrecio();
    }
    
    echo "ok";
?>