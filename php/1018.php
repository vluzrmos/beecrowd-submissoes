<?php

/**
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí
 */

$valor = intval(fgets(STDIN));

$notas = [100, 50, 20, 10, 5, 2, 1];

echo sprintf('%d', $valor).PHP_EOL;

foreach ($notas as $nota) {
    $quantidade = intval($valor / $nota);
    $valor = $valor % $nota;

    echo sprintf('%d nota(s) de R$ %d,00', $quantidade, $nota).PHP_EOL;
}
