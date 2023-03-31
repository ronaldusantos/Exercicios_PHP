<?php
    $valor_usuario = $_GET["valor"];
    $perc15 = $valor_usuario * 0.15;
    $perc50 = $valor_usuario * 0.50;
    echo "15% do valor digitado é $perc15 <br><br>"; 
    echo "50% do valor digitado é $perc50";

?>