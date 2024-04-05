<?php
$number = $_POST["num"]; 
if ($number >= 2 && $number <= 9) {
    echo "<h3>Таблиця множення для числа $number:</h3>";
    multiplicationTable($number);
    for ($j = 2; $j <= 9; $j++) {
        multiplicationTable($j);
    }
} else {
    echo "<p>Число має бути від 2 до 9</p>";
}

function multiplicationTable($number) {
    echo "<h2>Таблиця множення для числа $number</h2>";
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo "<tr><td>$number * $i = $result</td></tr>";
    }
    echo "</table>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
</head>
<body>
    <h2>Таблиця множення з функцією</h2>
    <form method="post" action="">
      <label for="num">Введіть число (від 2 до 9):</label>
      <input type="num" id="num" name="num" min="2" max="9" required />
      <button type="submit">Показати таблицю множення</button>
    </form>
</body>
</html>
