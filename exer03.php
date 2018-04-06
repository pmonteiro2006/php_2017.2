<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício 03</title>
    </head>
    <body>
        <?php
            $assinatura = 32.00;
            $impulsos = 0.09;
            $chamadas = 0.35;  
            $valorImpulsos = 164 * 0.09;
            $valorChamadas = 23 * 0.35;
            $valorAssinatura = $assinatura + ($valorImpulsos + $valorChamadas); 
                    
            echo "O valor da conta é de $valorAssinatura";
        ?>
    </body>
</html>
