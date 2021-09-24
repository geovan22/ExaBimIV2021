<?php
	class Usuario
    {
        public $conexion;
        
        public function __construct() 
        {
            $this->conexion=new Conexion();
        }

    }
?>