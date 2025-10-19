<?php

if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
    $numero1 = intval($_POST['numero1']);
    $numero2 = intval($_POST['numero2']);
    $resultado = $numero1 + $numero2;
    echo "La suma de $numero1 + $numero2 es $resultado";
}

?>