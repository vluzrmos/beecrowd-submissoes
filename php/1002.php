<?php

/**
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí
 */


$n = 3.14159;

$raio = doubleval(fgets(STDIN));

$area = round($n * pow($raio, 2), 4);

echo sprintf("A=%.4f", $area).PHP_EOL;
