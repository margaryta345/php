<?php
$login = isset($_POST['login']) ? $_POST['login'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if (!empty($login) && !empty($password)) {
    switch ($login) {
        case 'log1':
            $userPassword = '11111';
            $userName = 'Петро Іванович';
            break;
        case 'log2':
            $userPassword  = '22222';
            $userName = 'Анастасія Іванівна';
            break;
        case 'log3':
            $userPassword = '33333';
            $userName = 'Василь Миколайович';
            break;
        case 'log4':
            $userPassword = '444444';
            $userName = 'Олена Одісеївна';
            break;
        default:
            $userPassword = null;
            $userName = null;
            break;
    }
    
    if ($userPassword === $password) {
        echo "Доброго дня, $userName!";
    } else {
        echo "Вибачте, Ви у нас не зареєстровані.";
    }
} else {
    echo "Будь-ласка, введіть логін та пароль.";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
</head>
<body>
  <h2>Введіть логін та пароль</h2>
  <form action="" method="post">
    <label for="login">Логін:</label>
    <input type="text" id="login" name="login" /><br /><br />
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" /><br /><br />
    <input type="submit" value="Перевірити" />
  </form>
</body>
</html>
