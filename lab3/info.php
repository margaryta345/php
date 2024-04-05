<?php

    if (isset($_POST["surname"]) && isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["email"])) {
        
        $info = array(
            "Прізвище" => $_POST["surname"],
            "Ім`я" => $_POST["name"],
            "Вік" => $_POST["age"],
            "Email" => $_POST["email"]
        );

        
        echo "<h2>Інформація</h2>";
        echo "<table border='1'>";
        foreach ($info as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
    } else {
        
        echo "<p>Заповніть усі поля для введення</p>";
    }

?>