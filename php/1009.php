<?php

/**
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí
 */


$nome = fgets(STDIN);
$salarioFixo = doubleval(fgets(STDIN));
$montanteVendas = doubleval(fgets(STDIN));

$total = $salarioFixo + 0.15 * $montanteVendas;

echo sprintf("TOTAL = R$ %.2f", $total).PHP_EOL;
