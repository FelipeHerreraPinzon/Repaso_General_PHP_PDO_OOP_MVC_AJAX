<?php

class Producto{

    public $strDescripcion;
    public $fltPrecio;
    public $intStockminimo = 10;
    public $strStatus = "Activo";
   
    public function __construct(string $descripcion, float $precio )
    {
        $this->strDescripcion = $descripcion;
        $this->fltPrecio = $precio;
    }

    function getInfoProducto()
    {
        /// array asociativo
        $arrayProducto = array('producto' => $this->strDescripcion,
                               'precio '=> $this->fltPrecio,
                               'stock_minimo' => $this->intStockminimo,
                               'estado' => $this->strStatus

                               );
        return $arrayProducto;
    }


}