<?php

$gente = array (
    array(
        'Familia' => 'Los Simpson',
        'Padre' => 'Homer',
        'Madre' => 'Marge',
        'Hijos' => array('Bart', 'Lisa' , 'Maggie')
        ),
        
    array(
        'Familia' => 'Los Griffin',
        'Padre' => 'Peter',
        'Madre' => 'Lois',
        'Hijos' => array('Chris', 'Meg' , 'Stewie')
    )
    );

    foreach ($gente as $contenido) {
        foreach ($contenido as $indice => $valor) {
            if (is_array($valor)) {
            echo "$indice:";
                foreach ($valor as $valor2) {
                    echo "$valor2 ";
                }
            echo "<br><br>";
            }else{
                echo "$indice: $valor <br>";
            } 
        }
}
?>