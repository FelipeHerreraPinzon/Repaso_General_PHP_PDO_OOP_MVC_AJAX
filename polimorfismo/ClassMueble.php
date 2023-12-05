<?php

    require_once("ClassProducto.php");

    class Mueble extends Producto{

        public $strColor;
        public $strMaterial;
        public $strStatus = "Agotado";  /// redefiniendo la propiedad 

        public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material )
    {
        parent::__construct($descripcion, $precio);  //parent es para refrerirse al constructor de la clase padre
        $this->strMaterial = $material;
        $this->strColor = $color;
    }

    public function getInfoProducto()  /// redefieniendo metodo
    {
        /// array asociativo 
        $arrayProducto = array('producto' => $this->strDescripcion,
                               'precio '=> $this->fltPrecio,
                               'stock_minimo' => $this->intStockminimo,
                               'estado' => $this->strStatus,
                               'color' => $this->strColor,
                               'material' => $this->strMaterial

                               );
        return $arrayProducto;
    }

    }



?>