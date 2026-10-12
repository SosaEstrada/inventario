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

foreach ($casos as [$entrada, $esperado]) {
    $obtenido = validarNombreProducto($entrada);
    if ($obtenido === $esperado) {
        echo"PASS\n";
        $pasaron++;
      
    } else {
        echo "FAIL\n";
          $faltaron++;
    }
}
echo"\nTotal PASS: $pasaron\n";
echo"nTotal FAIL: $faltaron\n";