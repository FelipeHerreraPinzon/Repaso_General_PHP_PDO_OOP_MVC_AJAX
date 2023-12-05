<?php

require_once("ClassMueble.php");

final class Mesa extends Mueble{   /// con final ya no se puede heredar mas

    private $strForma = "";
    protected $strTamanio;
    public $strStatus = "Activo"; /// redefiniendo propiedad para Mesa


    public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material, string $tamanio )
    {
        parent::__construct($descripcion, $precio, $marca, $color, $material);  //parent es para refrerirse al constructor de la clase padre
        $this->strTamanio = $tamanio;
    
    }

    public function setForma(string $forma)
    {
        $this->strForma = $forma;
    }

    public function getInfoProducto()    /// redefieniendo metodo
    {
        /// array asociativo 
        $arrayProducto = array('producto' => $this->strDescripcion,
                               'precio '=> $this->fltPrecio,
                               'stock_minimo' => $this->intStockminimo,
                               'estado' => $this->strStatus,
                               'color' => $this->strColor,
                               'material' => $this->strMaterial,
                               'tamanio' => $this->strTamanio,
                               'forma' => $this->strForma

                               );
        return $arrayProducto;
    
    }

}


?>