<?php

$mysql = new mysqli('localhost', 'root', '', 'Rita');

if ($mysql->connect_error) {
    die("Помилка підключення: " . $mysql->connect_error);
}

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password =  $_POST['password'];
$name = $_POST['name'];
$birthDate = $_POST['birthdate'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$email = $_POST['email'];
$note = $_POST['note'];

$query = "INSERT INTO `Kor` (`login`, `password`, `name`, `birthDate`, `gender`, `country`, `email`, `note`)
        VALUES ('$login', '$password', '$name', '$birthDate', '$gender', '$country', '$email', '$note')";

if ($mysql->query($query) === TRUE) {
    
    if ($mysql->affected_rows > 0) {
        echo "Новий запис був добавлений";
    } else {
        echo "Помилка";
    }
} else {
    echo "Помилка підключення: " . $mysql->error;
}

$queryRead = "SELECT * FROM `Kor`";


$result = $mysql->query($queryRead);


if ($result->num_rows > 0) {

    echo "<table border='1'>
            <tr>
                <th>Login</th>
                <th>Password</th>
                <th>Name</th>
                <th>Birthdate</th>
                <th>Gender</th>
                <th>Country</th>
                <th>Email</th>
                <th>Note</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['login'] . "</td>
                <td>" . $row['password'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['birthDate'] . "</td>
                <td>" . $row['gender'] . "</td>
                <td>" . $row['country'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['note'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "Данних про користувачів немає!База даних пуста";
}

$mysql->close();
?>
