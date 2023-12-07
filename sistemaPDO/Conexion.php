<?php


    class Conexion
    {
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "db_sistema";
        private $conex;

        public function __construct()
        {
             
             $connectionString = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=utf8";
       
        try
        { 
           $this->conex = new PDO($connectionString, $this->user, $this->password);
           $this->conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          ///  echo "conectado !!!";
        } catch (Exception $e){
            $this->conex = 'Error de conexion';
            echo "ERROR: ". $e->getMessage();
        }

      }

      public function conectar()
      {
        return $this->conex;
      }

    }

   

 // $conect = new Conexion();
?>