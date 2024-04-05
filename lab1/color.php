<?php
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<style>
  table {
    width: 400px;
    height: 400px; 
}

    
</style>
<table>
<?php
for ($i = 0; $i < 10; $i++) {
    ?>
    <tr>
    <?php
    for ($j = 0; $j < 10; $j++) {
        $colors = array("#FF0000", "#00FF00", "#0000FF", "#FFFF00", "#00FFFF", "#FF00FF");
        $color = $colors[array_rand($colors)];
        ?>
        <td style="background-color:<?php echo $color; ?>;"></td>
        <?php
    }
    ?>
    </tr>
    <?php
}
?>
</table>
</body>
</html>
