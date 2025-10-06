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

    echo "<ul>";
    foreach ($gente as $contenido) {
        foreach ($contenido as $indice => $valor) {
            if (is_array($valor)) {
            echo "<li>$indice<br></li>";
            echo "<ul>";
                foreach ($valor as $valor2) {
                    echo "<li>$valor2<br></li>";
                }
           echo "</ul>";
            }else{
                echo "<li>$indice: $valor<br></li>";
            } 
        }
}
    echo "</ul>";
?>