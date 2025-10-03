<?php
//ejercicio 1

    $num1 = 10;
    $num2 = 10;

    if ($num1==$num2){
        $resultado=$num1*$num2;
        echo "La multiplicacion es igual a $resultado";
    }elseif ($num1>$num2){
         $resultado=$num1-$num2;
        echo "La resta es $resultado";
    }else{
         $resultado=$num1+$num2;
        echo "La suma es $resultado";
    }

?>