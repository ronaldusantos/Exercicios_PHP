<?php 
    $valor = $_GET["valor"];
    $horas = $_GET["horas"];

    $salario = $valor * $horas;

    echo "Salário = $salario";
?>