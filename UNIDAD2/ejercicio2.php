<?php
//ejercicio 2

    $num1 = 0;
    $num2 = 0;
    $num3 = 0;

    if ($num1>$num2 && $num1>$num3){
        echo "El numero mas grande es $num1";
    }elseif ($num2>$num1 && $num2>$num3){
        echo "El numero mas grande es $num2";
    }elseif ($num3>$num1 && $num3>$num2){
        echo "El numero mas grande es $num3";
    }else{
        echo "Los numeros son iguales";
    }

?>