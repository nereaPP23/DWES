<?php

switch ($_POST['operacion']) {
    case 'suma':
        $resultado = $_POST['numero1'] + $_POST['numero2'];
        echo "El resultado de la suma es $resultado";
        break;
    case 'resta':
        $resultado = $_POST['numero1'] - $_POST['numero2'];
         echo "El resultado de la resta es $resultado";
        break;
    case 'multiplicacion':
        $resultado = $_POST['numero1'] * $_POST['numero2'];
         echo "El resultado de la multiplicación es $resultado";
        break;
    case 'division':
        $resultado = $_POST['numero1'] / $_POST['numero2'];
         echo "El resultado de la división es $resultado";
        break;
    default:
        $resultado = "Operación no válida";
}



?>