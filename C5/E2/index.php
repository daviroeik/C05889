<!DOCTYPE html>
<html>
    <head>
        <title>EJ #2</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div id="wrap">
            <?php
                
                mt_srand(time());
                
                $n = mt_rand(1,10);
                $m = mt_rand(1,10);
                
                echo "n es: $n <br/> m es: $m <br/>";

                
                echo "<table>";
                
                for( $i = 0 ; $i != $n ; $i++ )
                {
                    echo "<tr></tr>";
                    for( $j = 0 ; $j != $m ; $j++ )
                    {
                        echo "<td>X</td>";
                    }
                }
           
                echo "</table>";
            ?>
        </div>
    </body>
</html>
        