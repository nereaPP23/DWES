<?php
/*  $paper[] = "Copier";
 $paper[] = "Inkjet";
 $paper[] = "Laser";
 $paper[] = "Photo";
 print_r($paper);

 echo "<br>";
 var_dump($paper); */

/*  $paper['copier'] = "Copier & Multipurpose";
 $paper['inkjet'] = "Inkjet Printer";
 $paper['laser'] = "Laser Printer";
 $paper['photo'] = "Photographic Paper";
 echo $paper['laser'];
 print_r($paper);
 echo "<br>";
 var_dump($paper); */

 
 /* $p1 = array("Copier", "Inkjet", "Laser", "Photo");
 echo "p1 element: " . $p1[2] . "<br>";
 $p2 = array('copier' => "Copier & Multipurpose",
 'inkjet' => "Inkjet Printer",
 'laser' => "Laser Printer",
 'photo' => "Photographic Paper");
 echo "p2 element: " . $p2['inkjet'] . "<br>"; */


 $paper = array("Copier", "Inkjet", "Laser", "Photo");   
 foreach($paper as $indice => $valor)
 {
 echo "$indice: $valor<br>";
 }

?> 