<?php
//ejercicio 8

     $num= rand(1,1000);

     $suma=1;

     for ($i=2; $i<=$num; $i++) {
            if ($num%$i==0) {
               $suma+=$i;
            }
     }

     if ($suma == $num && $num !=1)  {
          echo "El numero $num es perfecto";
     } else {
          echo "El numero $num no es perfecto";
     }
?>