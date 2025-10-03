<?php
 //ejercicio 5

    $a=1;
    $b=-0;
    $c=-4;
    $ec=$a."x^2+(".$b.")*x+(".$c.")=0";
    echo "Ecuación a resolver: $ec<br>";
    $disc=$b**2-4*$a*$c;
    if ($disc<0) {
        echo "No hay soluciones reales";
        return;
    }
    if ($a==0) {
        if ($b==0) {
        if ($c==0) {
            echo "Cualquier número es solución";
        } else {
            echo "No hay solución";
        }
        } else { //b no es 0
        $sol=-$c/$b;
        echo "Hay una solución igual a $sol";
        }
    } else { //a no es 0
        if ($disc==0) {
        $sol=-$b/(2*$a);
        echo "Hay una solución igual a $sol";
        } else {
        $sol1=(-$b+sqrt($disc))/(2*$a);
        $sol2=(-$b-sqrt($disc))/(2*$a);
        echo "Hay dos soluciones: $sol1 y $sol2";
        }
    }
    ?>