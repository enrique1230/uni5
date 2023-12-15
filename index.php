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

