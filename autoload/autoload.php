<?php
/// detecta las clases que necesitamos, y las carga
//  si no se requieren, no las carga
    function autoload($class) 
    {
         
         require_once($class.".php");
         echo $class.".php"."<br>";
    }

    spl_autoload_register('autoload');

?>