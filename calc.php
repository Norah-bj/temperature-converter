<?php
    if (isset($_POST["submit"])) {
            $celsius = $_POST["input"];
            $fahrenheit = $celsius * 9/5 + 32;
            echo "<p>$celsius °C is $fahrenheit °F</p>";
        } else {
            echo "<p>Input is not set.</p>";
        }
    ?>