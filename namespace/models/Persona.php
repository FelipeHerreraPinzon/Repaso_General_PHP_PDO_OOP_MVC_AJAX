<?php

    namespace Models;

   abstract  class Persona  /// una clase abstracta NO permite instanciar objetos
    {
       public $intDPI;
       public $strNombre;
       public $intEdad;
       public $mensaje;
    
       function __construct(int $dpi, string $nombre, int $edad)
       {
            $this->intDPI = $dpi;
            $this->strNombre = $nombre;
            $this->intEdad = $edad;
       }


     abstract  public function getDatosPersonales();  /// los metodos abstractos no pueden tener cuerpo
    /*
       {   $datos = "
                    <h2>DATOS PERSONALES</h2>
                    DPI: {$this->intDPI} <br>
                    Nombre: {$this->strNombre} <br>
                    Edad: {$this->intEdad} <br>
           ";
           return $datos;  
       }
    */
     abstract  public function setMensaje(string $mensaje);   // parametro string $mensaje
     abstract  public function getMensaje():string;   // devuelve un string $mensaje
 
    
    }

?>    