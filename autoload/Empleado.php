<?php
    require_once("Persona.php");

    class Empleado extends Persona{

        protected $strPuesto;

        function __construct(int $dpi, string $nombre, int $edad)
        {
             parent::__construct($dpi, $nombre, $edad);
        }

        public function setPuesto(string $puesto){
            $this->strPuesto = $puesto;
        }

        public function getPuesto(){
           return $this->strPuesto;
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