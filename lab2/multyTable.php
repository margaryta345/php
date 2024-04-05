<?php
$colors = array("#FF0000", "#00FF00", "#0000FF", "#FFFF00", "#00FFFF", "#FF00FF");

$number = $_POST["number"];
echo "<h3>Таблиця множення $number</h3>";
echo "<table>";

for ($i = 1; $i <= 10; $i++) {
    $result = $number * $i;

    $colorIndex = $i % count($colors);
    $color = $colors[$colorIndex];
    echo "<tr style='background-color: $color;'>";
    echo "<td>$number * $i = </td>";
    echo "<td>$result</td>";
    echo "</tr>";
}

echo "</table>";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
</head>
<body>
  <h2>Таблиця множення</h2>
  <form method="post" action="">
    <label for="number">Введіть число:</label>
    <input type="number" id="number" name="number" required />
    <button type="submit">Показати</button>
  </form>
</body>
</html>
