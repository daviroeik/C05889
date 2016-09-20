<!DOCTYPE html>
<html>
    <head>
        <title>EJ #1</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div id="wrap">            
            <form action="" method="GET">
                <table>
                    <tr>
                        <td colspan="2">Favor ingrese el valor de los numeros:</td>
                    </tr>
                    <tr>
                        <td>Valor 1er numero:</td>
                        <td><input type="text" name='a'></td>
                    </tr>
                    <tr>
                        <td>Valor 2do numero:</td>
                        <td><input type="text" name='b'></td>
                    </tr>
                    <tr>
                        <td>Valor 3er numero:</td>
                        <td><input type="text" name='c'></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit">Calcular</button></td>
                    </tr>
                </table>
            </form>
        <div>
        
        <?php
            
            $a = $_GET['a'];
            $b = $_GET['b'];
            $c = $_GET['c'];
  
            $x = $a*3;
            $y = $b+$c;
            
            if(isset($a)&&isset($b)&&isset($c))
            {
                if($x > $y)
                {
                    echo 'ES MAYOR ';
                }
                elseif($x < $y)
                {
                    echo 'ES MENOR ';
                }
            }
        ?>
    </body>
</html>