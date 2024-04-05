<?php

$conn = new mysqli("localhost", "root", "", "MySiteDB");
if ($conn->connect_error) {
    die("Помилка підключення " . $conn->connect_error);
}

$comment_created = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $author = $_POST["author"];
    $comment = $_POST["comment"];
    $sql = "INSERT INTO `comments` (`Created`, `Author`, `Comment`) VALUES (NOW(), '$author', '$comment')";
    if ($conn->query($sql) === TRUE) {
        $comment_created = true; 
    } else {
        echo "Помилка при створенні коментаря: " . $conn->error;
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
            display: <?php echo $comment_created ? 'block' : 'none'; ?>;
        }
    </style>
</head>
<body>
    <h2 class="success-message">Коментар успішно створений</h2> 
    <form action="" method="POST" style="display: <?php echo $comment_created ? 'none' : 'block'; ?>;"> 
        <label for="author">Автор:</label><br />
        <input type="text" id="author" name="author" /><br />
        <label for="comment">Коментар:</label><br />
        <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br /><br />
        <button type="submit">Створити коментар</button>
    </form>
</body>
</html>

