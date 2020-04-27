<?php
class Producto{
	private $idProducto;
	private $nombreProducto;
	private $marca;
	private $precio;
	private $imagen;

	public function getIdProducto() {
		return $this->idProducto;
	}
	public function setIdProducto($idProducto) {
		$this->idProducto = $idProducto;
	}

	public function getNombreProducto() {
		return $this->nombreProducto;
	}
	public function setNombreProducto($nombreProducto) {
		$this->nombreProducto = $nombreProducto;
	}
	
	public function getMarca() {
		return $this->marca;
	}
	public function setMarca($marca) {
		$this->marca = $marca;
	}
		
	public function getPrecio() {
		return $this->precio;
	}
	public function setPrecio($precio) {
		$this->precio = $precio;
	}

	public function getImagen() {
		return $this->imagen;
	}
	public function setImagen($imagen) {
		$this->imagen = $imagen;
	}

}
?>