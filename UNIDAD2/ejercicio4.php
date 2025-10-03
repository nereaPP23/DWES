<?php
//ejercicio 4

    $num1= rand(1,100);
    $num2= rand(1,100);
    echo "Numeros generados: $num1 y $num2 <br>";
    if ($num1>$num2){
        echo "El $num1 es mayor que $num2";
        if ($num1%2==0){
            echo " y es par";
        }else{
            echo " y es impar";
        }
    }else{
        echo "El $num2 es mayor que $num1";
        if ($num2%2==0){
            echo " y es par";
        }else{
            echo " y es impar";
        }
    }
    
?>