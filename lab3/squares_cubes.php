<?php
$squares = [];
for ($i = 10; $i <= 20; $i++) {
    $squares[] = $i * $i;
}

$cubes = [];
for ($i = 1; $i <= 10; $i++) {
    $cubes[] = $i * $i * $i;
}

$combine = array_merge($squares, $cubes);

echo "Об'єднаний масив:<br>";
foreach ($combine as $index => $value) {
    echo "$value<br>";
}
?>