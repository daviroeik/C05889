<!DOCTYPE html>
<html>
    <head>
        <title>EJ #5</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div id="wrap">
            
             <?php
                $vector = array();
                $q = array();
                
                $vector[0] = "http://www.abc.com.py/";
                $vector[1] = "https://mail.google.com/";
                $vector[2] = "http://gitref.org/";
                $vector[3] = "http://aulavirtual.uc.edu.py/";
                $vector[4] = "https://www.hattrick.org/";
                
                $q[0] = 888;

            ?>
            
            <table>
                <tr>
                    <td colspan="3">Bitacora de accesos</td>
                </tr>
                <tr>
                    <td>Nro</td>
                    <td>URL</td>
                    <td>Accesos</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td><a href="http://www.abc.com.py/"><?php echo "$vector[0]"; ?></a></td>
                    <td><?php echo "$q[0]";?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="https://mail.google.com/"><?php echo "$vector[1]"; ?></a></td>
                    <td><?php echo "$q[1]";?></td>
                </tr>
                 <tr>
                    <td>3</td>
                    <td><a href="http://gitref.org/"><?php echo "$vector[2]"; ?></a></td>
                    <td><?php echo "$q[2]";?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><a href="http://aulavirtual.uc.edu.py/"><?php echo "$vector[3]"; ?></a></td>
                    <td><?php echo "$q[3]";?></td>
                </tr>
                 <tr>
                    <td>5</td>
                    <td><a href="https://www.hattrick.org/"><?php echo "$vector[4]"; ?></a></td>
                    <td><?php echo "$q[4]";?></td>
                </tr>
                
            </table>
            
            
            
           
        </div>
    </body>
</html>