<?php

$matriz = array();
$sumColumnas = 0;


for ($i=0; $i<20; $i++) {
    for ($j=0; $j<20; $j++) {
        $matriz[$i][$j] = rand(1,9);
    }
}


    echo "<h2>Matriz:</h2><br>";
    foreach ($matriz as $fila) {
        foreach ($fila as $columna) {
            echo "$columna\t";
        }
        echo "<br>";
    }

    for ($i=0; $i<20; $i++) {
        for ($j=0; $j<20; $j++) {
            $sumColumnas = array_sum($matriz[$j]);
        }
        echo "<br>Suma de la columna $i: $sumColumnas";
        
       
    }

    /*SIN ACABAR */
?>