<?php
echo '
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>';


$size = 10;


echo '<table border="1" >';
for ($i = 1; $i <= $size; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $size; $j++) {
        echo '<td>' . $i * $j . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '</body>
</html>';
?>
