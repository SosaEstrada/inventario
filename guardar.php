<?php

require_once __DIR__ . '/config/conexion.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$nombre = trim($_POST['nombre'] ?? '');
$cantidad = $_POST['cantidad'] ?? '';

if ($nombre === '' || $cantidad === '') {
    header('Location: index.php?estado=incompleto');
    exit;
}

if (filter_var($cantidad, FILTER_VALIDATE_INT) === false || (int) $cantidad < 1) {
    header('Location: index.php?estado=cantidad_mayor_a_cero');
    exit;
}


$sentencia = $conexion->prepare(
    'INSERT INTO productos (nombre, cantidad)
     VALUES (:nombre, :cantidad)'
);

$sentencia->execute([
    'nombre' => $nombre,
    'cantidad' => (int) $cantidad
]);

header('Location: index.php?estado=guardado');
exit;