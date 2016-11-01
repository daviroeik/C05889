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
                mt_srand(time());
                //$q = 0;
                
                for($i = 0; $i < 10000; $i++)
                {
                    $rnum = mt_rand(0,1000);
                    if(($rnum % 2)== 0)
                    {
                        echo $rnum;
                        echo '<br/>';
                        //$q++;
                    }
                }
                
                echo "<br/>";
                echo "Se generaron $i numeros pares";
            ?>
        </div>
    </body>
</html>