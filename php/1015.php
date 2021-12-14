<?php

/**
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí
 */

function getPoint()
{
    return array_combine(
        ['x', 'y'],
        array_map(fn ($value) => doubleval($value), explode(' ', fgets(STDIN)))
    );
}

function distance($point1, $point2)
{
    return sqrt(
        pow($point2['x'] - $point1['x'], 2)
        +
        pow($point2['y'] - $point1['y'], 2)
    );
}

$p1 = getPoint();
$p2 = getPoint();

echo sprintf('%.4f', distance($p1, $p2)).PHP_EOL;
