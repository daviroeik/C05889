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
                //$link = $_GET['link'];
                
                $vector[0] = "http://www.abc.com.py/";
                $vector[1] = "https://mail.google.com/";
                $vector[2] = "http://gitref.org/";
                $vector[3] = "http://aulavirtual.uc.edu.py/";
                $vector[4] = "https://www.hattrick.org/";
                
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
                    <td><a id="link1" href="http://www.abc.com.py/"><?php echo "$vector[0]"; ?></a></td>
                    <td><?php echo "$q[0]";?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a id="link2" href="https://mail.google.com/"><?php echo "$vector[1]"; ?></a></td>
                    <td><?php echo "$q[1]";?></td>
                </tr>
                 <tr>
                    <td>3</td>
                    <td><a id="link3" href="http://gitref.org/"><?php echo "$vector[2]"; ?></a></td>
                    <td><?php echo "$q[2]";?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><a id="link4" onclick="" href="http://aulavirtual.uc.edu.py/"><?php echo "$vector[3]"; ?></a></td>
                    <td><?php echo "$q[3]";?></td>
                </tr>
                 <tr>
                    <td>5</td>
                    <td><a id="link5" href="index.php?https://www.hattrick.org/"><?php echo "$vector[4]"; ?></a></td>
                    <td><?php echo "$q[4]";?></td>
                </tr>
                
            </table>

             <?php
  
                $q[0] = 0;
                $q[1] = 0;
                $q[2] = 0;
                $q[3] = 0;
                $q[4] = 0;
  
                if(isset($_GET['link1']))
                {
                    $q[0] = $q[0] + 1;
                    echo "Visitas al Link 1 = ".$q[0];
                    
                }
                if(isset($_GET['link2']))
                {
                    $q[1] = $q[1] + 1;
                    echo "Visitas al Link 2 = ".$q[1];
                }
                if(isset($_GET['link3']))
                {
                    $q[2] = $q[2] + 1;
                    echo "Visitas al Link 3 = ".$q[2];
                }
                if(isset($_GET['link4']))
                {
                    $q[3] = $q[3] + 1;
                    echo "Visitas al Link 4 = ".$q[3];
                }
                if(isset($_GET['link5']))
                {
                    $q[4] = $q[4] + 1;
                    echo "Visitas al Link 5 = ".$q[4];
                }
                

            ?>
            
        
            
        </div>
    </body>
</html>