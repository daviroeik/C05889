<!DOCTYPE html>
<html>
    <head>
        <title>EJ #5</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div id="wrap">
            <form>
                <table>
                    <tr>
                        <td colspan="3">Las constantes son:</td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td>=</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>b</td>
                        <td>=</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>c</td>
                        <td>=</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td colspan="3">Ingrese la variable:</td>
                    </tr>
                    <tr>
                        <td>var</td>
                        <td>=</td>
                        <td><input type="text" name='var'></td>
                    </tr>
                    <tr>
                        <td colspan="3"><button type="submit">Calcular</button></td>
                    </tr>
                </table>
            </form>
        
            <?php
                $var = $_GET['var'];
                
                define("ca",2);
                define("cb",3);
                define("cc",4);
                
                if(isset($var))
                {
                    $x1 = ( (-cb) + sqrt( (pow(cb, 2)-( 4 * ca * cc ) ) ) ) / ( 2 * ca );
	
                    $x2 = ( (-cb) - sqrt( (pow(cb, 2)-( 4 * ca * cc ) ) ) ) / ( 2 * ca );
                }
                
                echo "X1 es igual a : $x1";
                echo "<br/>";
                echo "X2 es igual a : $x2";
                
            ?>
        </div>
    </body>
</html>