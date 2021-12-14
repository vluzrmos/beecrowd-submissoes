<?php

/**
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí
 */


$pesoA = 2;
$pesoB = 3;
$pesoC = 5;

$A = doubleval(fgets(STDIN));
$B = doubleval(fgets(STDIN));
$C = doubleval(fgets(STDIN));

$MEDIA = ($A*$pesoA + $B*$pesoB + $C*$pesoC) / ($pesoA + $pesoB + $pesoC);

echo sprintf("MEDIA = %.1f", $MEDIA).PHP_EOL;
