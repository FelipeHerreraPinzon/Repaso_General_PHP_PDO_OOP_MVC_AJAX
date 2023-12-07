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

////    update user   
    $updateUser = $objetoUsuario->updateUser(2, "edit 3", 8615, "emaileditfgaoo@mail.co");
    echo $updateUser;


    //// get user con id
    $user = $objetoUsuario->getUser(3);
    print_r('<pre>');
    print_r($user);
    print_r('</pre>');


  ////  delete user con id

     $delete = $objetoUsuario->deleteUser(3);
     echo $delete;

?>