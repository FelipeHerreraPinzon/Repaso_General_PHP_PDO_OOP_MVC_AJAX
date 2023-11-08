<?php

require_once("UsuarioClass.php");

$objUsuarioUno = new UsuarioClass("Felipe", "felipe@mail.com", "Admin");
$objUsuarioDeveloper = new UsuarioClass("DEVELOPER", "developer@mail.com", "Cliente");
/*
echo $objUsuarioUno->strNombre;
echo $objUsuarioUno->strEmail;
echo $objUsuarioUno->strTipo;
echo UsuarioClass::$strEstado;
*/


echo $objUsuarioUno->getPerfil();
echo "<br><br>";

echo $objUsuarioDeveloper->getPerfil();
echo "<br><br>";


$objUsuarioDeveloper->setCambiarClave("12345");
echo $objUsuarioDeveloper->getPerfil();



?>