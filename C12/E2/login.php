<html>
    <head>
        <title>EJ #2</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="login.css">
        
    </head>
    <body>
        <div id="wrap">
            <h1>Sesion</h1>
            <form>
                <table>
                    <tr>
                        <td>Usuario:</td>
                        <td><input type="text" id="usuario"></td>
                    </tr>
                    <tr>
                        <td>Contraseña:</td>
                        <td><input type="password" id="clave"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="button" value="Ingresar" onclick=""></td>
                    </tr>
                </table>               
            </form>
        </div>
        <!--
        <script>
            var user;
            var pass;
            user = document.getElementById("user").value;
            pass = document.getElementById("pass").value;
            
            function validaVacio()
            {   /*
                if (user === ''|| pass === '')
                {
                    alert ("Datos no validos");
                }    */
                alert (user);
                alert (pass);
            }
            
            
            
        </script>
        -->
        <?php
            include "conexion.php";
            $con=conectar();
            
            //$result = pg_query($conexion, "SELECT nombre, apellido  FROM persona");
           /* 
            $result = pg_query($con, "SELECT usuario, clave  FROM usuarios");
            $result = pg_query($con, "SELECT FROM usuarios (usuario, clave) WHERE usuario = $user AND clave = $clave");            
            if (!$result)
            {
              echo "Ocurrió un error.\n";
              exit;
            }
            */
           
           function ppp();
           {
            $user = $_POST['usuario'];
            $pass = $_POST['clave'];
            
            
            
            echo "$user";
            echo "$clave";
           }
        ?>
    </body>
</html>