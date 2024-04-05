<?php

$conn = new mysqli("localhost", "root", "", "MySiteDB");
if ($conn->connect_error) {
    die("Помилка підключення " . $conn->connect_error);
}

$privileges_created = false; 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $password = $_POST["password"];
    $rights = $_POST["rights"];
    $sql = "INSERT INTO `privileges` (`Name`, `Password`, `Rights`) VALUES ('$name', '$password', '$rights')";
    if ($conn->query($sql) === TRUE) {
        $privileges_created = true; 
    } else {
        echo "Помилка при створенні привілегій: " . $conn->error;
    }
}

$conn->close();
?>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SiteDB</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            margin-top: 20px;
        }
        label {
            font-weight: bold;
        }
        .success-message {
            display: <?php echo $privileges_created ? 'block' : 'none'; ?>; 
        }
    </style>
</head>
<body>
    <h2 class="success-message">Привілегії успішно створені</h2> 
    <form action="" method="POST" style="display: <?php echo $privileges_created ? 'none' : 'block'; ?>;"> 
        <label for="name">Ім'я:</label><br />
        <input type="text" id="name" name="name" required /><br /><br />
        <label for="password">Пароль:</label><br />
        <input type="password" id="password" name="password" required /><br /><br />
        <label for="rights">Права доступу:</label><br />
        <input type="text" id="rights" name="rights" required /><br /><br />
        <button type="submit">Зареєструвати</button>
    </form>
</body>
</html>
