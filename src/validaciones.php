<?php

function validarNombreProducto(string $nombre): bool
{
    $nombre = trim($nombre);

    return mb_strlen($nombre, 'UTF-8') >= 3
        && mb_strlen($nombre, 'UTF-8') <= 50;
}

function validarCantidadProducto(int|string $cantidad): bool
{
    return filter_var(
        $cantidad,
        FILTER_VALIDATE_INT,
        ['options' => ['min_range' => 0]]
    ) !== false;
}