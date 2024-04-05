<?php
if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    if ($number % 2 == 0) {
        echo "<p>Число $number є парним.</p>";
    } else {
        echo "<p>Число $number не є парним.</p>";
    }
    if (is_numeric($number) && floor($number) == $number) {
        echo "<p>Число $number є цілим.</p>";
    } else {
        echo "<p>Число $number не є цілим.</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
</head>
<body>
  <h2>Перевірка числа</h2>
  <form action="" method="post">
    <label for="number">Введіть число:</label>
    <input type="text" id="number" name="number" required />
    <button type="submit" name="submit">Перевірити</button>
  </form>
</body>
</html>
