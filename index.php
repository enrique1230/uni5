<html>
<head>
    <title>Mi Programa</title>
</head>
<body>
<?php
function retornarColorHexa($rojo, $verde, $azul) {
    $color = sprintf("#%02X%02X%02X", $rojo, $verde, $azul);
    return $color;
}

$nombreColor = retornarColorHexa(255, 0, 0);  // Red background
$numeroColor = retornarColorHexa(0, 255, 0);  // Green background
?>
<table>
    <tr>
        <td bgcolor="<?php echo $nombreColor ?>">Luis Enrique Flores Rodriguez</td>
        <td bgcolor="<?php echo $numeroColor ?>">21091002</td>
    </tr>
</table>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>ASCII Table</title>
</head>
<body>

<?php
function obtenerCaracterASCII($valor) {
    return chr($valor);
}
?>

<table border="1">
    <tr>
        <th>Decimal</th>
        <th>Carácter</th>
    </tr>
    <?php
    for ($i = 32; $i <= 127; $i++) {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>" . obtenerCaracterASCII($i) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>

