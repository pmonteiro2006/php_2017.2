<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício 06</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="varA">
            <input name="varB">
            <input type="submit" value="enviar">
        </form>
        <?php
            $varA = $_POST['varA'];
            $varB = $_POST['varB'];
            $adicao = $varA + $varB;
            $subtracao = $varA - $varB;
            $multiplicacao = $varA * $varB;
            $divisao = $varA / $varB;
            
            echo "O valor da adição é $adicao <br>";
            echo "O valor da subtração é $subtracao <br>";
            echo "O valor da multiplicação é $multiplicacao <br>";
            echo "O valor da divisão é $divisao";
            
        ?>
    </body>
</html>
