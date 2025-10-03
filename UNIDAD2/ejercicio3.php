<?php
//ejercicio 3

    $JORNADA=40;  
    $PHORA=50;    
    $horas=120; 
    $diferencia=$horas-$JORNADA;
    if ($diferencia>8) {
        $paga=8*$PHORA*2+($diferencia-8)*$PHORA*3;
    } else {
        $paga=$diferencia*$PHORA*2;
    }
    echo "Horas trabajadas: $horas<br>";
    echo "Horas extra: $diferencia<br>";
    echo "Dinero extra: $paga";

?>