
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

