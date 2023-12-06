<?php
    namespace Controllers;
   // require_once("../models/Persona.php");
   require_once("../autoload.php");
    use Models\Persona;

    class Cliente extends Persona{

        protected $fltCredito; 

        function __construct(int $dpi, string $nombre, int $edad)
        {
             parent::__construct($dpi, $nombre, $edad);
        }

        public function setCredito(string $credito){
            $this->fltCredito = $credito;
        }

        public function getCredito():float
        {
           return $this->fltCredito;
        }

        public function getDatosPersonales()  /// redefiniendo metodo abstracto
        {
            $datos = "
                     <h2>DATOS PERSONALES</h2>
                     DPI: {$this->intDPI} <br>
                     Nombre: {$this->strNombre} <br>
                     Edad: {$this->intEdad} <br>
            
            ";
            return $datos;  
        }

        public function setMensaje(string $mensaje)   // parametro string $mensaje
        {
            $this->mensaje = $mensaje;
        }
        public function getMensaje():string  // devuelve un string $mensaje
        {
            return $this->mensaje.''.$this->strNombre;
        } 


    }



?>