<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício 04</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="carros">            
            <input type="submit" value="enviar">
        </form>
        <?php
            $salario = 800;
            $com = 300;
            $carros = $_POST['carros'];
            $total= $salario + ($com * $carros);
    
            echo "O salário total é de: $total";
        ?>
    </body>
</html>
