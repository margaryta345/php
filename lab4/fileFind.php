<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
if(isset($_POST['submit'])){
    $filename = $_POST['filename'];

    if(file_exists($filename)){
        echo "<h2>Інформація про файл $filename:</h2>";
        echo "Розмір: " . filesize($filename) . " bytes<br>";
        echo "Час створення: " . date ("F d Y H:i:s.", filectime($filename)) . "<br>";
        echo "Час останньої модифікації: " . date ("F d Y H:i:s.", filemtime($filename)) . "<br>";
        echo "Вміст файлу:";
        readfile($filename);
    } else {
        echo "<p>Файл з іменем $filename  не існує.</p>";
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="filename">Ім'я файлу:</label>
    <input type="text" id="filename" name="filename" required>
    <button type="submit" name="submit">Відправити</button>
</form>

</body>
</html>
