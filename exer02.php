<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício 02</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="distancia">
            <input name="litros">
            <input type="submit" value="enviar">
        </form>
        <?php
            $distancia = $_POST['distancia'];
            $litros = $_POST['litros'];
            $consumo = $distancia / $litros;
                
            echo "O consumo médio é de: $consumo";
        ?>
    </body>
</html>