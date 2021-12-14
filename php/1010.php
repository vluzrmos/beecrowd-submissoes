<?php

/**
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí
 */

$peca1 = explode(' ', fgets(STDIN));
$peca2 = explode(' ', fgets(STDIN));

$valor = ($peca1[1] * $peca1[2]) + ($peca2[1] * $peca2[2]);

echo sprintf("VALOR A PAGAR: R$ %.2f", $valor).PHP_EOL;
