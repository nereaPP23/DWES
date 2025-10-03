<?php
//ejercicio 7

   
    for ($num=2; $num<=50; $num++) {
        $primo=true;
        for ($i=2; $i<=$num/2; $i++) {
        if ($num % $i == 0) $primo=false;
        }
        if ($primo==true) echo "$num<br>";
    }
 
?>