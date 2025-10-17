

<html>
    <body>
        <form action="formDinamico.php" method="post">
            <?php
            for ($i = 0; $i <= 10; $i++) {
                echo "<label for=\"numero$i\">Número $i:</label><br>";
                echo "<input type=\"number\" id=\"numero$i\" name=\"numero$i\" required><br><br>";
            }
            ?>
            <button type="submit">Enviar</button>
    </body>
</html>