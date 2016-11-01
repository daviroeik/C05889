<!DOCTYPE html>
<html>
    <head>
        <title>EJ #6</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div id="wrap">
            <?php
                $x = ( ( pow( M_SQRTPI, 2 ) * M_PI ) + M_SQRT3 ) / ( M_EULER * M_E );
                echo "El resultado de la expresi&oacute;n es $x";
            ?>
        </div>
    </body>
</html>