<?php

require_once("autoload.php");

$objetoUsuario = new Usuario();
  
///              INSERTAR USUARIO
//   $insertar = $objetoUsuario->insertarUsuario("Felipe", 565842235, "felipe@mail.com");
///  echo $insertar;


 ///       Extraer Usuarios
   $users = $objetoUsuario->getUsuarios();
   print_r('<pre>');
   print_r($users);
   print_r('</pre>');


?>