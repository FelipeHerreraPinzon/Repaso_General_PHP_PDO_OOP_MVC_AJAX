<?php

require_once("ClassMesa.php");

$objCama = new Producto("Cama", 10500);
$arrayInfoProducto = $objCama->getInfoProducto();

print_r('<pre>');
print_r($arrayInfoProducto); /// los objetos se imprimen con print_r(), con echo daría error
print_r('</pre>');

$objMueble = new Mueble("Closet", 10500, "ElBosque", "Café", "Madera");
$arrayInfoMueble = $objMueble->getInfoProducto();

print_r('<pre>');
print_r($arrayInfoMueble); /// los objetos se imprimen con print_r(), con echo daría error
print_r('</pre>');

$objMesa = new Mesa("mesa de noche", 800, "Nochesita", "Negro", "Melamina", "3mt");
$objMesa->setForma("redonda");
$arrayInfoMesa = $objMesa->getInfoProducto();


print_r('<pre>');
print_r($arrayInfoMesa); /// los objetos se imprimen con print_r(), con echo daría error
print_r('</pre>');
?>