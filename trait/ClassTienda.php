<?php
 
    require_once("Carrito.php");
    require_once("Producto.php");

    class Tienda
    {
        use Producto, Carrito;
        public $fltTotal = 0;

        public function getCarrito()
        {
            $this->fltTotal = $this->fltPrecio * $this->intCantidad;

            $infoCarrito = "
            <h2>Carrito</h2>
            <hr>
            Producto : {$this->strProducto} <br>
            Cantidad : {$this->intCantidad} <br>
            Precio : {$this->fltPrecio} <br>
            Total : {$this->fltTotal} <br>
            ";
            return $infoCarrito;
        }

    }



?>