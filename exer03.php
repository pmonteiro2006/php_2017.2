<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício 03</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="litrosgastos">
            <input name="quilometros">
            <input name="valorlitro">
            <input type="submit" value="enviar">
        </form>
        <?php
            $litrosGastos = $_POST['litrosgastos'];
            $quilometros = $_POST['quilometros'];
            $valorLitro = $_POST['valorlitro']; 
            $valorGasto = ($litrosGastos * $valorLitro) / $quilometros;
                
            echo "O valor gasto é: $valorGasto";
        ?>
    </body>
</html>