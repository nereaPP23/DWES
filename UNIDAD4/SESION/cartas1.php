<?php

session_start();

$binario = [rand(0, 1), rand(0, 1), rand(0, 1), rand(0, 1)];
$potencias = [8, 4, 2, 1];

for ($i = 0; $i < 4; $i++) {
    if ($binario[$i] == 1) {
        $_SESSION['decimalcorrecto'] += $potencias[$i];
    }
}

echo <<<_END
<html>
    <body>
        <h1>Adivina el número decimal</h1>

_END;
       echo "<h2>El número en BINARIO es: </h2>";
       foreach ($binario as $bin){
           echo "<strong>$bin</strong>";
       }
       echo "<br>";
       for ($i = 0; $i < 4; $i++) {
           if ($binario[$i] == 1) {
               switch ($potencias[$i]) {
                   case 1:
                       echo '<img src="CARTASIMG/1.PNG" alt="1">';
                       break;
                   case 2:
                       echo '<img src="CARTASIMG/2.PNG" alt="2">';
                       break;
                   case 4:
                       echo '<img src="CARTASIMG/4.PNG" alt="4">';
                       break;
                   case 8:
                       echo '<img src="CARTASIMG/8.PNG" alt="8">';
                       break;
                   default:
                       break;
               }
           } else {
               echo '<img src="CARTASIMG/negro.PNG" alt="negro">';
           }
        }
    
    echo "<br><br>";

    echo <<<_END
    <form action="cartas2.php" method="post">
        <label for="numdecimal">Número decimal:</label>
        <input type="number" id="numdecimal" name="numdecimal" required>
        <input type="submit" name="submit" value="Enviar">
    </form>
    </body>

</html>
_END;
    
?>