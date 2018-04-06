<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício 09</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="inteiro1">
            <input name="inteiro2">
            <input type="submit" value="enviar">
        </form>
        <?php
            $inteiro1 = $_POST['inteiro1'];
            $inteiro2 = $_POST['inteiro2'];
            $divisao = $inteiro1 / $inteiro2;
            
            #$resultado1 = $inteiro1 * $inteiro1;
            $resultado1 = pow($inteiro1, 2);
            
            #$resultado2 = $inteiro2 * $inteiro2 * $inteiro2;
            $resultado2 = pow($inteiro2, 3);
            
            echo "O valor da divisão é $divisao <br>";
            echo "O valor ao quadrado é $resultado1 <br>";
            echo "O valor ao cubo é $resultado2";
        ?>
    </body>
</html>
