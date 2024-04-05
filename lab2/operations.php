<?php
if (isset($_POST['number1']) && isset($_POST['number2'])) {
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];

    if (ctype_digit($num1) && ctype_digit($num2) && $num2!=0) {
        $sum = $num1 + $num2;
        $diff = $num1 - $num2;
        $mul = $num1 * $num2;
        $div = $num1 / $num2;
        $mod = $num1 % $num2;

        echo "$num1 + $num2 = $sum<br>";
        echo "$num1 - $num2 = $diff<br>";
        echo "$num1 * $num2 = $mul<br>";
        echo "$num1 / $num2 = $div<br>";
        echo "$num1 % $num2 = $div<br>";
    }
    else{
        echo "Перевірте введені дані!";
    }

}
?>
<html>
  <head>
    <meta charset="UTF-8" />
  </head>
  <body>
    <h2>Продемонструй арефметричні операції з ними</h2>
    <form action="" method="post">
      <label for="number1">Число 1:</label>
      <input type="text" id="number1" name="number1" /><br /><br />
      <label for="number2">Число 2:</label>
      <input type="text" id="number2" name="number2" /><br /><br />
      <input type="submit" value="Вивести дії" />
    </form>
    </body>
</html>
