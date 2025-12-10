<?php
function pintar_tablero($tablero,$descubiertas) {
    echo "<div style='display:flex; flex-wrap:wrap; width:400px;'>";
    foreach ($tablero as $i=>$carta) {
        if ($descubiertas[$i]) {
            echo "<div style='width:80px;height:80px;border:1px solid black;
                  display:flex;align-items:center;justify-content:center;
                  font-size:24px;'>$carta</div>";
        } else {
            echo "<form method='post' style='margin:0;'>
                    <button type='submit' name='pos' value='$i'
                    style='width:80px;height:80px;'>?</button>
                  </form>";
        }
    }
    echo "</div>";
}
?>
