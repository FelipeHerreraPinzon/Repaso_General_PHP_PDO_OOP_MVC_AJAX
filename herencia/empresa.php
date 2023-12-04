<?php

require_once("ClassEmpleado.php");
require_once("ClassCliente.php");

  // objeto empleado
    $objEmpleado = new Empleado(858756, "FelipeEmployee", 26);
    $objEmpleado->setPuesto("Administrador");

    echo $objEmpleado->getDatosPersonales();   /// ese metodo es de la clase persona, funciona porque empleado es heredada de persona
    echo $objEmpleado->getPuesto();   


    // objeto cliente
    $objCliente = new Cliente(858756, "FelipeClient", 27);
    $objCliente->setCredito(10000);

    echo $objCliente->getDatosPersonales();   /// ese metodo es de la clase persona, funciona porque empleado es heredada de persona
    echo "Créditos:" . $objCliente->getCredito();   





?>