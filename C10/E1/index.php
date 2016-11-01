<!DOCTYPE html>
<html>
    <head>
        <title>EJ #1</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
            <table>
                <tr>
                    <td>Nombre</td>
                    <td>Precio</td>
                </tr>
                
            

          <?php
           //error_reporting(E_ALL);
           $host="localhost";
           $port="5432";
           $dbname="clase12";
           $user="postgres";
           $password="postgres";

           $cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

          $conexion = pg_connect($cadenaConexion) or die("<br/>Error en la Conexión: ".pg_last_error());
          //echo "<br/>Conexion Exitosa PHP - PostgreSQL<br/>";


          //$conn = pg_pconnect($cadenaConexion);
          if (!$conexion)
          {
            echo "An error occured.\n";
            exit;
          }

          //$result = pg_query($conexion, "SELECT nombre, precio FROM productos");
          $result = pg_query($conexion, "SELECT nombre, apellido  FROM persona");
            if (!$result)
            {
              echo "Ocurrió un error.\n";
              exit;
            }

            while ($row = pg_fetch_row($result))
            {
              echo
                    "
                    <tr>
                        <td>nombre: $row[0]</td>
                        <td>precio: $row[1]</td>
                    </tr>
                    
                    ";

              echo "<br />\n";
            }

        ?>
        </table>
    </body>
</html>
