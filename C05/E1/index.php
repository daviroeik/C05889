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
                        <td>Favor ingrese una palabra :</td>
                    </tr>
                    <tr>
                        <td><input type="text" name='palabra'></td>
                    </tr>
                    <tr>
                        <td><button type="submit">Analizar!</button></td>
                    </tr>
                </table>
            </form>
            
            <?php
                
                $palabra = $_GET['palabra'];
                
                if(isset($palabra))
                {
                    $reverso = strrev($palabra);
                    if($palabra == $reverso)
                    {
                        echo 'La palabra ingresada es un palindromo <img src="../extras/yes.png">';
                    }
                    
                    else
                    
                        echo 'La palabra ingresada no es un palindromo <img src="../extras/no.png">';
                    
                }
            ?>
        <div>
        