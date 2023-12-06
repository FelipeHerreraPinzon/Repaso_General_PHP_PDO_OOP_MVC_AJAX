<?php

  ///require_once("../controllers/Empleado.php");
  ///require_once("../controllers/Cliente.php");
  ///require_once("../controllers/Persona.php");
  require_once("../autoload.php");

  use Controllers\Empleado;
  use Controllers\Cliente;
  use Controllers\Persona;

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

    echo "<br><br>";
    $mensaje = new Persona();
    echo $mensaje->saludar();
    
 

  





?>