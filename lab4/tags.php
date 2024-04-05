<?php

$file = fopen("tags.txt", "r") or die("Неможливо відкрити файл!");
$tagCount = 0;
echo "<table border='1'>";
while(!feof($file)) {
  
    $line = fgets($file);

    if ($tagCount % 2 == 0) {
        //вставка HTML коду як звичайного тексту,
        echo "<tr><td>" . htmlspecialchars($line) . "</td>";
    } else { 
        echo "<td>" . ($line) . "</td></tr>";
    }


    $tagCount++;
}

echo "</table>";
echo "Всього у файлі описано тегів: " . ($tagCount / 2);
fclose($file);

?>
