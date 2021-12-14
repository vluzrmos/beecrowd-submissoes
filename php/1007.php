<?php

/**
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí
 */


$A = doubleval(fgets(STDIN));
$B = doubleval(fgets(STDIN));
$C = doubleval(fgets(STDIN));
$D = doubleval(fgets(STDIN));

$DIFERENCA = ($A*$B) - ($C*$D);

echo sprintf("DIFERENCA = %d", $DIFERENCA).PHP_EOL;
