<?php

$matriz = array();


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

    /*array_fill(inicio, longitud, valor) 
    inicio: índice donde empieza el array (en este caso, 0)
    longitud: longitud del array (en este caso, 20)
    valor: qué valor tendrá cada elemento (en este caso, 0)
    */

    $sumColumnas = array_fill(0, 20, 0); 
    for ($i=0; $i<20; $i++) {
        for ($j=0; $j<20; $j++) {
            $sumColumnas[$j] += $matriz[$i][$j];
        }
    }
    
    $maxSuma=0;
    $maxColumna=0;

    for ($i=0; $i<20; $i++) {
        if ($sumColumnas[$i] > $maxSuma) {
            $maxSuma = $sumColumnas[$i];
            $maxColumna = $i;
        }
    }

    echo "<br><br>";
    echo "La columna con la suma máxima es la columna $maxColumna con una suma de $maxSuma";
?>
