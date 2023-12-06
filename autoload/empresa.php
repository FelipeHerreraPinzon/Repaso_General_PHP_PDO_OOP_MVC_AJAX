<?php

   // require_once("ClassEmpleado.php");
   // require_once("ClassCliente.php");
   require_once("autoload.php");

   // objeto empleado
    $objEmpleado = new Empleado(858756, "FelipeEmployee", 26);
    $objEmpleado->setPuesto("Administrador");
    $objEmpleado->setMensaje("Bienvenido Empleado ");

    echo $objEmpleado->getMensaje();
    echo $objEmpleado->getDatosPersonales();  
    echo "Puesto: ".$objEmpleado->getPuesto();

    echo "<br><br><br><br>";
    // objeto cliente
    $objCliente = new Cliente(858756, "FelipeEmployee", 26);
    $objCliente->setCredito(10000);
    $objCliente->setMensaje("Bienvenido Cliente ");

    echo $objCliente->getMensaje();
    echo $objCliente->getDatosPersonales();  
    echo "Creditos: ".$objCliente->getCredito();
    
 

  





?>