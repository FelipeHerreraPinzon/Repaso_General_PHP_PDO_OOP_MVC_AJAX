<?php

require_once('ClassCalcular.php');


$objetoCalcular = new Calcular();

echo $objetoCalcular->raizCuadrada(9);
echo "<br>";
echo $objetoCalcular->potencia(9, 2);
echo "<br>";
echo $objetoCalcular->op_basicas(4, 3, "+");


?>