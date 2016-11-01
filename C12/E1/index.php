
<html>
    <head>
        <title>EJ #1</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        
    </head>
    <body>
        
        Ejercicio 12
        
        <?php
        
            include "persona.php";
            include "empleado.php";
            /*
            $host="localhost";
            $port="5432";
            $dbname="clase12";
            $user="postgres";
            $password="postgres";
    
            $cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";
    
            $conexion = pg_connect($cadenaConexion) or die("<br/>Error en la Conexión: ".pg_last_error());
            */
            $nombre_persona = "Jorge";
            $apellido_persona = "Ale";
            $cedula_persona = "123321";
            $direccion_persona = "eusebio ayala";
            $edad_persona = "24";
            $codigoEmpelado = "222001";
            
            $empleadito = new Empleado($nombre_persona, $apellido_persona, $cedula_persona, $direccion_persona, $edad_persona, $codigoEmpelado);
            echo"<br/>";
            echo "Nombre: ".$empleadito->getNombrePersona()."<br/>";
            echo "Apellido: ".$empleadito->getApellidoPersona()."<br/>";
            echo "Cedula: ".$empleadito->getCedulaPersona()."<br/>";
            echo "Direccion: ".$empleadito->getDireccionPersona()."<br/>";
            echo "Codigo: ".$empleadito->getCodigoEmpleado()."<br/>";
            
            
            
  
    
            
           
        ?>
    </body>
</html>