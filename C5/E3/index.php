<!DOCTYPE html>
<html>
    <head>
        <title>EJ #3</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div id="wrap">
            <?php
                
                $suma = 0;
                $vector = array();
                $q = 100;
                
                for ($i = 0 ; $i < $q ; $i++)
                {
                    $valor = mt_rand(1,100);
                    $vector[$i] = $valor;
                    $suma = $suma + $valor;
                }

                echo "<table>";
                
               foreach ($vector as $valor)
               {
                    echo "<tr><td> $valor </td></tr>";
               }
               
               echo "</table>";
               
               echo "<br/> La suma es: $suma";
             
                
            ?>
                
        </div>
    </body>
</html>