<?php
$anfang = $_POST["anfang"];
$finish = $_POST["finish"];

if ($anfang < $finish) {
    $hours = 0;
    $current = $anfang;
    
    echo "<h3>Ріст бактерій:</h3>";
    echo "<ul>";
    do {
        $hours++;
        $current *= 2;
        echo "<li> Минуло $hours годин - маємо $current бактерій</li>";
    } while ($current < $finish);
    echo "</ul>";
} else {
    echo "<p>Введіть коректні значення</p>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
</head>
<body>
  <h2>Введіть дані про кількість бактерій</h2>
  <form method="post" action="">
    <label for="anfang">Початкова кількість бактерій:</label>
    <input type="number" id="anfang" name="anfang" required />
    <label for="finish">Кінцева кількість бактерій:</label>
    <input type="number" id="finish" name="finish" required />
    <button type="submit">Показати рівень росту</button>
  </form>
</body>
</html>
