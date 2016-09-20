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
                <p>Favor ingrese el valor de los numeros:</p>
                <p>Valor 1er numero: <input type="text" name='a'></p>
                <p>Valor 2do numero: <input type="text" name='b'></p>
                <p>Valor 3er numero: <input type="text" name='c'></p>
                <p><button type="submit">Calcular</button></p>
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