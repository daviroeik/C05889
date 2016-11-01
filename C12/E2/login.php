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
                        <td><input type="text" id="user"></td>
                    </tr>
                    <tr>
                        <td>Contraseña:</td>
                        <td><input type="password" id="pass"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="button" value="Ingresar" onclick="validaVacio();"></td>
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
             
        ?>
    </body>
</html>