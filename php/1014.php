<?php

/**
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí
 */

$X = intval(fgets(STDIN));
$Y = doubleval(fgets(STDIN));

$consumo = $X / $Y;

echo sprintf('%.3f km/l', $consumo).PHP_EOL;
