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
                mt_srand(time());
                $q = 0;                
                
                for( ; ; )
                {
                    $q++;
                    $rnum = mt_rand(0,100000);
                    if(($rnum % 983)== 0)
                    {
                        echo "El numero divisible por 983 es $rnum";
                        echo '<br/>';
                        echo"Se generaron $q numeros aleatorios";
                        break;

                    }
                }
                
                
            ?>
        </div>
    </body>
</html>