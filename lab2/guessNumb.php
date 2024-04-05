<?php
session_start();

$number = 13;

$secret = isset($_POST['secret']) ? intval($_POST['secret']) : null;

if ($secret !== null) {
    if ($secret == $number) {
        echo 'Правильно!';
    } elseif ($secret < $number) {
        echo 'Загадане число більше';
    } else {
        echo 'Загадане число менше';
    }
} else {
    echo 'empty'; 
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
</head>
<body>
  <h2>Вгадай число</h2>
  <form action="" id="guess" method="post">
    <label for="number">Введіть число:</label>
    <input type="number" id="secret" name="secret" />
    <button type="submit">Відгадати</button>
  </form>
</body>
</html>
