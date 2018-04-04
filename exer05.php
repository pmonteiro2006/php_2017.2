<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício 05</title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="numeleitores">
            <input name="votosbrancos">
            <input name="votosnulos">
            <input name="votosvalidos">
            <input type="submit" value="enviar">
        </form>
        <?php
            $numEleitores = $_POST['numeleitores'];
            $votosBrancos = $_POST['votosbrancos'];
            $votosNulos = $_POST['votosnulos']; 
            $votosValidos = $_POST['votosvalidos'];
            $percentualBrancos = ($votosBrancos * 100) / $numEleitores;
            $percentualNulos = ($votosNulos * 100) / $numEleitores;
            $percentualValidos = ($votosValidos * 100) / $numEleitores;
            
            echo "O percentual de votos em Branco é de: $percentualBrancos <br>";
            echo "O percentual de votos Nulos é de: $percentualNulos <br>";
            echo "O percentual de votos Válidos é de: $percentualValidos";
        ?>
    </body>
</html>
