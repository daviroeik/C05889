<!DOCTYPE html>
<html>
    <head>
        <title>EJ #2</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div id="wrap">
            <form>
                <table>
                    <tr>
                        <td colspan="2">Favor ingrese las notas:</td>
                    </tr>
                    <tr>
                        <td>1er Parcial:</td>
                        <td><input type="text" name='a'></td>
                    </tr>
                    <tr>
                        <td>2do Parcial:</td>
                        <td><input type="text" name='b'></td>
                    </tr>
                    <tr>
                        <td>Final:</td>
                        <td><input type="text" name='c'></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit">Calcular</button></td>
                    </tr>
                </table>
            </form>
        <div>
        <div id="res">
            
        </div>

        <?php
        
            
            $a = $_GET['a'];
            $b = $_GET['b'];
            $c = $_GET['c'];
            
            if(isset($a)&&isset($b)&&isset($c))
            {
            
            echo 'Puntaje alcanzado: ';
            echo $a + $b + $c;
            echo '<br/>';
            
                switch($suma = ($a + $b + $c))
                {
                    case ( $suma >= 0 && $suma < 60 ):
                        echo "La nota es UNO";
                        break;
                    
                    case ( $suma >= 60 && $suma < 70 ):
                        echo "La nota es DOS";
                        break;
                        
                    case ( $suma >= 70 && $suma < 80 ):
                        echo "La nota es TRES";
                        break;
                        
                    case ( $suma >= 80 && $suma < 91 ):
                        echo "La nota es CUATRO";
                        break;
                        
                    case ( $suma >= 91 && $suma <= 100 ):
                        echo "La nota es CINCO";
                        break;
                    
                    default:
                        echo "Valores no validos";
                        break;
                } 
            }
        ?>
    </body>
</html>