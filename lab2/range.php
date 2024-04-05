<?php
$start = $_POST["start"];
$end = $_POST["end"];

if ($start <= $end) {
    echo "<h3>Таблиця відношення числа 10 від $start до $end</h3>";
    echo "<table>";
    for ($i = $start; $i <= $end; $i++) {
        echo "<tr>";
        if ($i == 0) {
            echo "<td colspan='2'>У діапазоні не має бути числа 0</td>";
        } else {
            $result = 10 / $i;
            echo "<td>10 / $i</td><td>$result</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Невірний діапазон</p>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
</head>
<body>
  <h2>Введіть діапазон</h2>
  <form method="post" action="">
    <label for="start">Початок</label>
    <input type="number" id="start" name="start" required />
    <label for="end">Кінець</label>
    <input type="number" id="end" name="end" required />
    <button type="submit">Вивести</button>
  </form>
</body>
</html>
