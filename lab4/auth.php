<?php

    $login = $_POST["login"];
    $password = $_POST["password"];
    $mode = $_POST["mode"];

    if ($mode == "login") {
        $filename = "./users/" . $login . ".txt";

        if (file_exists($filename)) {
            $filePassword = file_get_contents($filename); 
            if ($password == $filePassword) {
                echo "Доброго дня, $login!";
            } else {
                echo "Пароль не правильний";
            }
        } else {
            echo "Такий користувач не зареєстрований!";
        }
    }

    elseif ($mode == "register") {
        $filename = "./users/" . $login . ".txt"; 

        if (!file_exists($filename)) {
            file_put_contents($filename, $password); 
            echo "Користувача зареєстровано!";
        } else {
            echo "<p >Логін зайнятий. Будь ласка, оберіть інший.</p>";
        }
    }
?>

