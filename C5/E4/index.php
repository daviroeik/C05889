<!DOCTYPE html>
<html>
    <head>
        <title>EJ #4</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div id="wrap">
            <?php
            
                $vector = array();
                $q = 50;
                
                for ($i = 0 ; $i < $q ; $i++)
                {
                    $valor = mt_rand(1,1000);
                    $vector[$i] = $valor;
                }
                
                echo "<table>";
                foreach ($vector as $valor)
               {
                    echo "<td> $valor </td>";
               }
               echo "</table>";
                
                
                $vector[0] = $mayor;
                
                for ($i = 0 ; $i < $q ; $i++)
                {
                    if($vector[$i] > $mayor)
                    {
                        $mayor = $vector[$i];
                        $indice = $i;
                    }
                }
     
                echo "<br/>El elemento con indice $indice posee el mayor valor: $mayor";
            ?>
        </div>
    </body>
</html>