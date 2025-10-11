<?php

$amigos = array(
    'Madrid'=>array(
        'Nombre'=>'Pedro',
        'Edad'=>32,
        'Telefono'=>'91-999.99.99'
    ),
    'Barcelona'=>array(
        'Nombre'=>'Susana',
        'Edad'=>34,
        'Telefono'=>'93-000.00.00'
    ),
    'Toledo'=>array(
        'Nombre'=>'Sonia',
        'Edad'=>42,
        'Telefono'=>'925-09.09.09'
    ),

);

foreach ($amigos as $ciudad => $valor) {
    echo "<br><strong>Ciudad: $ciudad</strong><br>";
    foreach ($valor as $indice => $valor2) {
        echo "$indice: $valor2<br>";    
    }
}

?>