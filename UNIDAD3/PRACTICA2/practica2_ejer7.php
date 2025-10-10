<?php

$matriz = array();
$vectormax = array ();
$vectorprom = array();

for ($i=0; $i < 4; $i++) { 
    for ($j=0; $j < 5; $j++) { 
       $matriz [$i][$j]= rand(1,100);
    }
}

    foreach ($matriz as $fila) {
        foreach ($fila as $valor) {
            echo "$valor\t";
        }
        echo "<br>";
    }

    echo "<br><br>";

    foreach ($matriz as $fila) {
        $vectormax[] = max($fila);
        $vectorprom[] = array_sum($fila) / count($fila);
    }
    echo "Valores máximos de cada fila:<br>";
    for ($i=0; $i < 4; $i++) { 
        echo $vectormax[$i]." ";
    }
    echo "<br>";
    echo "Promedios de cada fila:<br>";
    for ($i=0; $i < 4; $i++) { 
        echo $vectorprom[$i]." ";
    }

?>