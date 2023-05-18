<?php

/*require './modelos/conexion.php';
$resultado = conexion::ejecutar("INSERT INTO productos(producto_nombre, producto_precio) values('prueba','5')");
var_dump($resultado);*/


require './modelos/conexion.php';
$resultado = conexion::servir("SELECT * FROM productos");
echo "<pre>";
var_dump($resultado);
echo "</pre>";
