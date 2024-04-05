<?php

$conn = new mysqli("localhost", "root", "", "MySiteDB");
if ($conn->connect_error) {
    die("Помилка підключення " . $conn->connect_error);
}

$note_created = false; 

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $title = $conn->real_escape_string($_POST["title"]);
    $article = $conn->real_escape_string($_POST["article"]);
    $sql = "INSERT INTO `notes` (`Created`, `Title`, `Article`) VALUES (NOW(), '$title', '$article')";
    if ($conn->query($sql) === TRUE) {
        $note_created = true; 
    } else {
        echo "Помилка при створенні нотатки: " . $conn->error;
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
            display: <?php echo $note_created ? 'block' : 'none'; ?>; 
        }
    </style>
</head>
<body>
    <h2 class="success-message">Нотатка успішно створена</h2> 
    <form action="" method="POST" style="display: <?php echo $note_created ? 'none' : 'block'; ?>;">
        <label for="title">Заголовок:</label><br />
        <input type="text" id="title" name="title" required /><br /><br />
        <label for="article">Текст:</label><br />
        <textarea id="article" name="article" rows="4" cols="50" required></textarea><br /><br />
        <button type="submit">Додати нотатку</button>
    </form>
</body>
</html>
