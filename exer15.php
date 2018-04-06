<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício 15</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="valorHora">
            <input name="numHoras">
            <input name="descInss">
            <input type="submit" value="enviar">
        </form>
        <?php
            $valorHora = $_POST['valorHora'];
            $numHoras = $_POST['numHoras'];
            $descInss = $_POST['descInss'];
            
            $salarioBruto = ($valorHora * $numHoras);
            
            $desconto = $salarioBruto * ($descInss / 100);
            /*if($salarioBruto <= 1693.72) {
                $descInss = $salarioBruto * 0.08;
            } else if($salarioBruto <= 2822.90){
                $descInss = $salarioBruto * 0.09;
            } else if($salarioBruto <= 5645.80) {
                $descInss = $salarioBruto * 0.11;
            } */
            
            $salarioLiquido = $salarioBruto - $desconto;
            
            echo "O novo salário é $salarioLiquido";
        ?>
    </body>
</html>
