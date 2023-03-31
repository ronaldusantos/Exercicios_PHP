<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 01</title>
</head>
<body>
    <h1>Questao 01</h1>
    <hr> 
    <p>
        Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro
        número.
    </p>
    <?php
        $numero1 = 4;
        $numero2 = 6;
    
        $soma = $numero1 + $numero2;
        echo "Soma = $soma";

        $multiplicar = $soma * $numero1;
        echo "<br> O resultadado é $multiplicar";
    ?>
</body>
</html>