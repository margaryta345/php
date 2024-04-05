<?php
if (isset($_POST['number1']) && isset($_POST['number2'])) {
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];

    if ($num1 > $num2) {
        $bigger = $num1;
    } elseif ($num2 > $num1) {
        $bigger = $num2;
    } else {
        $bigger = 'Числа рівні';
    }

    echo  $bigger;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
</head>
<body>
  <h2>Порівняй 2 числа</h2>
  <form action="" method="post">
    <label for="number1">Число 1:</label>
    <input type="text" id="number1" name="number1" /><br /><br />
    <label for="number2">Число 2:</label>
    <input type="text" id="number2" name="number2" /><br /><br />
    <input type="submit" value="Вивести більше число" />
  </form>
</body>
</html>
