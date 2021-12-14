<?php

/**
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí
 */

$pi = 3.14159;
$raio = doubleval(fgets(STDIN));

$volume = (4/3) * $pi * pow($raio, 3);

echo sprintf("VOLUME = %.3f", $volume).PHP_EOL;
