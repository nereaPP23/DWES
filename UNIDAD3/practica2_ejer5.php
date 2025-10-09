<?php

$matriz = array();

for($i=0; $i<3; $i++){
    for($j=0; $j<5; $j++){
        $matriz[$i][$j] = rand(1,100);
    }
}

for($i=0; $i<3; $i++){
    for($j=0; $j<5; $j++){
        echo $matriz[$i][$j]." ";
        
    }
}

echo "<br><br>";
for($i=0; $i<5; $i++){
    for($j=0; $j<3; $j++){
        echo $matriz[$j][$i]." ";
    }
    echo "<br>";
}
?>