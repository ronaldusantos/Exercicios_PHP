<?php
    $valor1 = $_GET["valor01"];
    $valor2 = $_GET["valor02"];

    $quadrado_valor01 = $valor1**2;
    $quadrado_valor02 = $valor2**2;

    echo "Resultado = " . $quadrado_valor01 + $quadrado_valor02;
    
?>