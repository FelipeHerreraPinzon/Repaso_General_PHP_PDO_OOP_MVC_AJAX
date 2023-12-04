<?php

class Operaciones{

    public $cantidadUno = 0;
    public $cantidadDos = 0;
    public $resultado = 0;

    function __construct($intCantidadUno, $intCantidadDos){
         
        $this->cantidadUno = $intCantidadUno;
        $this->cantidadDos = $intCantidadDos;
    }

    public function getSuma(){
        $this->resultado = $this->cantidadUno + $this->cantidadDos;
        return $this->resultado;
    } 
    
    public function getResta(){
        $this->resultado = $this->cantidadUno - $this->cantidadDos;
        return $this->resultado;
    }

    public function getMultiplicacion(){
        $this->resultado = $this->cantidadUno * $this->cantidadDos;
        return $this->resultado;
    }

    public function getDivision(){
        $this->resultado = $this->cantidadUno / $this->cantidadDos;
        return $this->resultado;
    }


}


?>