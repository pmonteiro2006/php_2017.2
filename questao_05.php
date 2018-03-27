<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Prova</title>
    </head>
    <body>
        <?php

            if (isset($_POST['valor'])){
                if ($_POST['valor'] % 2){
                    echo "Impar";
                }          
    
                else {
                    echo "Par";
                }        
            }
        ?>
    </body>
</html>