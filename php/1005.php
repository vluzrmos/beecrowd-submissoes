<?php

/**
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí
 */


$pesoA = 3.5;
$pesoB = 7.5;

$A = doubleval(fgets(STDIN));
$B = doubleval(fgets(STDIN));

$MEDIA = ($A*$pesoA + $B*$pesoB) / ($pesoA + $pesoB);

echo sprintf("MEDIA = %.5f", $MEDIA).PHP_EOL;
