 <?php
    class Telefono
    {
        //Atributos
        public $tipo;
        public $numero;
        //Constructos
        function __construct($tipo_telefono, $numero_telefono)
        {
            $this->$tipo = $tipo_telefono;
            $this->$numero = $numero_telefono;
        }
        //Getters
        function getTipoTelefono()
        {
            return $this->$tipo;
        }
        
        function getNumeroTelefono()
        {
            return $this->$numero;
        }
        //Setters
        function setTipoTelefono($tipoTelefono)
        {
            $this->$nombre = $NombreEmpresa;
        }
        
        function setNumeroTelefono($numeroTelefono)
        {
            $this->$numero = $numeroTelefono;
        }
    }
?>