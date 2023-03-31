<?php 
    $f= $_GET["fahrenheit"];

    $c = (5 * ($f-32)/9);

    echo "Temperatura em graus Fahrenheit = $f <br> Temperatura em graus Celsius = $c"
?>