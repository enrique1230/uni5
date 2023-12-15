<?php

if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];

    function obtenerCodigoASCII($numero) {
        if ($numero >= 0 && $numero <= 255) {
            $caracter = chr($numero);
            return $caracter;
        } else {
            return "Número fuera de rango válido (0-255).";
        }
    }

    $resultado = obtenerCodigoASCII($numero);
    echo $resultado;
} else {
    echo "Error: Parámetro 'numero' no proporcionado.";
}

?>