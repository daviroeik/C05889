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
                        <td><input type="text" name='a'></td>
                    </tr>
                    <tr>
                        <td>b</td>
                        <td>=</td>
                        <td><input type="text" name='b'></td>
                    </tr>
                    <tr>
                        <td>c</td>
                        <td>=</td>
                        <td><input type="text" name='c'></td>
                    </tr>
                    <tr>
                        <td colspan="3"><button type="submit">Calcular</button></td>
                    </tr>
                </table>
            </form>
        
            <?php
                $a = $_GET['a'];
                $b = $_GET['b'];
                $c = $_GET['c'];
				
				echo "$a<br/>";
                echo "$b<br/>";
                echo "$c<br/>";
                
                if(isset($a)&&isset($b)&&isset($c))
                {
                    $b2 = pow($b, 2);
                    $ac =  4 * $a * $c;
                    $aa = $a * 2;
                    $b2ac = ($b2 - $ac);
                    
                    $x1 = ((-$b) + sqrt($b2ac));
                    //$x1 = ( (-$b) + sqrt( (pow($b, 2)-( 4 * $a * $c ) ) ) ) / ( 2 * $a );
	
                    $x2 = ( (-$b) - sqrt( (pow($b, 2)-( 4 * $a * $c ) ) ) ) / ( 2 * $a );
                }
                
                echo "X1 es igual a : $x1";
                echo "<br/>";
                echo "X2 es igual a : $x2";
                
            ?>
        </div>
    </body>
</html>