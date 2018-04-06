<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício 13</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="inteiro">
            <input type="submit" value="enviar">
        </form>
        <?php
            $inteiro = $_POST['inteiro'];
            $reajuste = 0.10;
            $valorReajuste = $inteiro + ($inteiro * $reajuste);
            
            echo "O valor reajustado é de $valorReajuste";
            
        ?>
    </body>
</html>
