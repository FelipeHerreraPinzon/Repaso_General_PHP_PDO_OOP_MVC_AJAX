<?php

// la interface sirve para definir los metodos de una clase, siempre deben ser puublic
interface Operacion{ 

    public function raizCuadrada(float $numero):float;
    public function potencia(int $numero, int $potencia):int;


}


?>