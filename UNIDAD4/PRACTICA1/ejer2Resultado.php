<?php

if (isset($_POST['edad'])) {
    $seleccion = $_POST['edad'];

switch ($seleccion) {
    case 'edad1':
        echo 'Menos de 14 años';
        break;
    case 'edad2':
        echo 'De 15 a 20 años';
        break;
    case 'edad3':
        echo 'De 21 a 40 años';
        break;
    case 'edad4':
        echo 'De 41 a 60 años';
        break;
    case 'edad5':
        echo 'Mas de 60 años';
        break;
    }
} else {
    echo 'Aún no me has dicho tu edad';
}    

?>