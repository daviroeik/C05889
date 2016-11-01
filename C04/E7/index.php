<!DOCTYPE html>
<html>
    <head>
        <title>EJ #7</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div id="wrap"
            <?php
                
                echo "</p> Versi&oacute;n de PHP :  " .PHP_VERSION."</p>";	
                echo "<p>El id de la versi&oacute;n de PHP :  ".PHP_VERSION_ID."</p>";
                echo "<p>M&aacute;ximo valor para enteros soportado :  ".PHP_MAJOR_VERSION."</p>";
                echo "<p>tama&ntilde;o m&aacute;ximo para nombre de archivo :  ".PHP_MAXPATHLEN."</p>";
                echo "<p>Versi&oacute;n del sistema operativo :  ".PHP_OS."</p>";	
                echo "<p>S&iacute;mbolo de fin de l&iacute;nea en uso :  ".PHP_EOL."</p>";	
                echo "<p>Include path por defecto :  ".DEFAULT_INCLUDE_PATH."</p>";
                
            ?>
        </div>
    </body>
</html>