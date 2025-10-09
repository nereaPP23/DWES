<?php

$alumnos = array(
    "Basico" => array(
        'Ingles'=>1,
        'Frances'=>14,
        'Aleman'=>8,
        'Ruso'=>3
    ),
    "Medio"=>array(
        'Ingles'=>6,
        'Frances'=>19,
        'Aleman'=>7,
        'Ruso'=>2
    ),
    "Perfeccionamiento"=>array(
        'Ingles'=>3,
        'Frances'=>3,
        'Aleman'=>4,
        'Ruso'=>1
    ),
);

foreach($alumnos as $contenido){
    foreach($contenido as $indice=>$valor){
        echo $indice." = ".$valor."<br>";
    }
}


?>