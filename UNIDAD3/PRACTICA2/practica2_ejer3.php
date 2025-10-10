<?php

//version 1
$pares = array(0,2,4,6,8,10,12,14,16,18);

foreach($pares as $valor){
    echo "$valor\n";
}

echo "<br><br>";
//version 2
$pares2 = array();

for ($i=0; $i<10; $i++){
    $pares2[] = $i*2;
}

foreach($pares2 as $valor){
    echo "$valor\n";
}

?>