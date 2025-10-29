<?php
session_start();
?>

<form action="procesar_test.php" method="POST">
  <h3>¿Cuánto tiempo pasas fuera de casa?</h3>
  <input type="radio" name="tiempo_fuera" value="mucho"> Mucho<br>
  <input type="radio" name="tiempo_fuera" value="poco"> Poco<br>

  <h3>¿Prefieres perros grandes o pequeños?</h3>
  <input type="radio" name="tamano" value="grande"> Grande<br>
  <input type="radio" name="tamano" value="pequeno"> Pequeño<br>

  <h3>¿Tienes experiencia con perros?</h3>
  <input type="radio" name="experiencia" value="si"> Sí<br>
  <input type="radio" name="experiencia" value="no"> No<br>

  <input type="submit" value="Ver compatibilidad">
</form>
