<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício 01</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="precoinicial">
            <input type="submit" value="enviar">
        </form>
        <?php
            $precoInicial = $_POST['precoinicial'];
            $desconto = 0.09;
            $precoFinal = $precoInicial - ($precoInicial * $desconto);
    
            echo "O novo preço é: $precoFinal";
        ?>
    </body>
</html>
