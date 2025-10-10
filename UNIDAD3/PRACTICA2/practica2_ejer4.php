<?php

$matriz = array();

for($i=0; $i<4; $i++){
    for($j=0; $j<4; $j++){
        $matriz[$i][$j] = rand(1,100);
    }
}

//mostrar la matriz entera
for($i=0; $i<4; $i++){
    for($j=0; $j<4; $j++){
        echo $matriz[$i][$j]." ";
    }
    echo "<br>";
}

echo "Elementos de la diagonal principal:<br>";
for($i=0; $i<4; $i++){
    echo $matriz[$i][$i]." ";
}

echo "<br>Elementos de la diagonal secundaria:<br>";
for($i=0; $i<4; $i++){
    echo $matriz[$i][3-$i]." ";
}
?>