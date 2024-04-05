<?php

$countries = array(
    "Україна" => array("Населення" => 38000000, "Столиця" => "Київ"),
    "Німеччина" => array("Населення" => 84000000, "Столиця" => "Берлін"),
    "Польща" => array("Населення" => 37000000, "Столиця" => "Варшава"),
);


// Виведення таблиці 3х2
echo "<table border='1'>";
foreach ($countries as $country => $data) {
    echo "<tr><td>$country</td><td>{$data['Населення']}</td></tr>";
    echo "<tr><td>Столиця:</td><td>{$data['Столиця']}</td></tr>";
}
echo "</table><br>";


// Виведення таблиці 2х3
echo "<table border='1'>";
echo "<tr>";
foreach ($countries as $country => $data) {
    echo "<td>$country</td>";
}
echo "</tr><tr>";
foreach ($countries as $country => $data) {
    echo "<td>{$data['Населення']} ({$data['Столиця']})</td>";
}
echo "</tr>";
echo "</table>";
?>