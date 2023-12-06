<?php

require_once("ClassTienda.php");

$objetoProducto = new Tienda();

$strProducto = "Teclado";
$fltPrecio = 110;
$intStock = 15;
$intCantidadVendida = 3;



$objetoProducto->setProducto($strProducto, $fltPrecio, $intStock);
$objetoProducto->getProducto();
echo $objetoProducto->getProducto();


$objetoProducto->setCarrito($strProducto, $intCantidadVendida);


$objetoProducto->setStock($intCantidadVendida);
echo $objetoProducto->getProducto();

$objetoProducto->getCarrito();
echo $objetoProducto->getCarrito();
?>