<?php
    class Empresa
    {
        public $nombre;
        public $direccion;
        
        function __construct($nombre_empresa, $direccion_empresa)
        {
            $this->$nombre = $nombre_empresa;
            $this->$direccion = $direccion_empresa;
            
            function getNombreEmpresa()
            {
                return $this->$nombre;
            }
            
            function setNombreEmpresa($nombreEmpresa)
            {
                $this->$nombre = $nombreEmpresa;
            }
        }
    }
?>