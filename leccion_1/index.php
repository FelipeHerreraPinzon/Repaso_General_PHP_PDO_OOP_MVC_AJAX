<?php

    require_once("Operaciones.php");

    $operacion1 = new Operaciones(10,2);
    $operacion2 = new Operaciones(100,3);

    $totalSuma = $operacion1->getSuma();
    echo "La suma es: ". $totalSuma;
    echo "</br>";

    $totalResta = $operacion1->getResta();
    echo "La resta es: ". $totalResta;
    echo "</br>";

    $totalMultiplicacion = $operacion1->getMultiplicacion();
    echo "La multiplicacion es: ". $totalMultiplicacion;
    echo "</br>";

    $totalDivision = $operacion1->getDivision();
    echo "La division es: ". $totalDivision;
    echo "</br>";


/////
echo "</br>";
echo "Operacion 2";
echo "</br>";

$totalSuma = $operacion2->getSuma();
echo "La suma es: ". $totalSuma;
echo "</br>";

$totalResta = $operacion2->getResta();
echo "La resta es: ". $totalResta;
echo "</br>";

$totalMultiplicacion = $operacion2->getMultiplicacion();
echo "La multiplicacion es: ". $totalMultiplicacion;
echo "</br>";

$totalDivision = $operacion2->getDivision();
echo "La division es: ". $totalDivision;
echo "</br>";


?>