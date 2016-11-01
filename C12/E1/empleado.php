<?php
    class Empleado extends Persona
    {
        public $codigo;
        
        function __construct($nombre_persona, $apellido_persona, $cedula_persona, $direccion_persona, $edad_persona, $codigoEmpleado)
        {
            parent::__construct($nombre_persona, $apellido_persona, $cedula_persona, $direccion_persona, $edad_persona);
            $this->codigo = $codigoEmpleado;
        }
        
        function getCodigoEmpleado()
        {
            return $this->codigo;
        }
        
        function setCodigoEmpleado($codigoEmpleado)
        {
            $this->codigo = $codigoEmpleado;
        }
    }
?>