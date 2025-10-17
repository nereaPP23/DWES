



<html>
    <body>
        <?php
            if (isset($_POST['enviar'])) {
                for ($i = 0; $i <= 10; $i++) {
                echo "El numero $i es: " . $_POST["numero$i"] . "<br>";
                }
            } else{
            echo "<form action=\"formDinamico.php\" method=\"post\">";
                
                for ($i = 0; $i <= 10; $i++) {
                    echo "<label for=\"numero$i\">Número $i:</label><br>";
                    echo "<input type=\"number\" id=\"numero$i\" name=\"numero$i\" required><br><br>";
                }

                echo "<button type=\"submit\" name=\"enviar\" value=\"Enviar\">Enviar</button>";
            echo "</form>";
            }
        ?>
    </body>
</html>




