create database carrito;

use carrito;

create table producto(
    id_producto int primary key auto_increment,
    nombre varchar(100),
    marca varchar(80),
    precio decimal(9,2),
    imagen text
    );

