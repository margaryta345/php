<?php
class User {
    private $surname;
    private $name;
    private $age;
    private $email;

    public function __construct($surname, $name, $age, $email) {
        $this->surname = $surname;
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    public function showInfo() {
        echo "<p>Прізвище: {$this->surname}</p>";
        echo "<p>Ім'я: {$this->name}</p>";
        echo "<p>Вік: {$this->age}</p>";
        echo "<p>Пошта: {$this->email}</p>";
    }
}

$surname = $_POST["surname"] ?? "";
$name = $_POST["name"] ?? "";
$age = $_POST["age"] ?? "";
$email = $_POST["email"] ?? "";

if (!empty($surname) && !empty($name) && !empty($age) && !empty($email)) {
    $user = new User($surname, $name, $age, $email);
    $user->showInfo();
} else {
    echo "<p style='color: red;'>Будь ласка, заповніть всі поля форми.</p>";
}
?>
