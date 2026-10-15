<?php

require_once __DIR__ . '/../src/validaciones.php';

$casos = [
    ["Teclado", true],
    ["",false],
    ["   ", false],
    ["Mouse", true]
];
$pasaron=0;
$faltaron=0;

echo "\n=== PRUEBAS DE NOMBRE ===\n";

foreach ($casos as [$entrada, $esperado]) {
    $obtenido = validarNombreProducto($entrada);
    if ($obtenido === $esperado) {
        $pasaron++;

        echo "APROBADO - Nombre: '$entrada'\n";
    } else {
        echo "FALLIDO - Nombre: '$entrada'\n";
        $faltaron++;
    }
}

// Validaciones de cantidad
$casosCantidad = [
    [10, true],
    [1, true],
    [-5, false],
    ["abc", false]
];

echo "\n=== PRUEBAS DE CANTIDAD ===\n";

foreach ($casosCantidad as [$entrada, $esperado]) {
    $obtenido = validarCantidadProducto($entrada);
    if ($obtenido === $esperado) {
        $pasaron++;

        echo "APROBADO - Cantidad: $entrada\n";
    } else {
        echo "FALLIDO - Cantidad: $entrada\n";
        $faltaron++;
    }
}

echo "\nTotal APROBADO: $pasaron\n";
echo "\nTotal FALLIDO: $faltaron\n";