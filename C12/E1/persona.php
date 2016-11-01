 <?php
    class Persona
    {
        //Atributos
        public $nombre;
        public $apellido;
        public $cedula;
        public $direccion;
        public $edad;
        //Constructor
        function __construct($nombre_persona, $apellido_persona, $cedula_persona, $direccion_persona, $edad_persona)
        {
            $this->nombre = $nombre_persona;
            $this->apellido = $apellido_persona;
            $this->cedula = $cedula_persona;
            $this->direccion = $direccion_persona;
            $this->edad = $edad_persona;
        }
        //Getters
        function getNombrePersona()
        {
            return $this->nombre;          
        }
        
        function getApellidoPersona()
        {
            return $this->apellido;    
        }
        
        function getCedulaPersona()
        {
            return $this->cedula;    
        }
        
        function getDireccionPersona()
        {
            return $this->direccion;    
        }
        
        function getEdadPersona()
        {
            return $this->edad;    
        }
        //Setters
        function setNombrePersona($nombrePersona)
        {
            $this->nombre = $nombrePersona;
        }
        
        function setApellidoPersona($apellidoPersona)
        {
            $this->apellido = $apellidoPersona;
        }
        
        function setCedulaPersona($cedulaPersona)
        {
            $this->cedula = $cedulaPersona;
        }
        
        function setDireccionPersona($direccionPersona)
        {
            $this->direccion = $direccionPersona;
        }
        
        function setEdadPersona($edadPersona)
        {
            $this->edad = $edadPersona;
        }
    }
?>