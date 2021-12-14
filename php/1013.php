<?php

/**
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí
 */

const A = 0;
const B = 1;
const C = 2;

$n = array_map(fn ($i) => intval($i), explode(' ', fgets(STDIN)));

function maiorAB($a, $b)
{
    return ($a + $b + abs($a - $b)) / 2;
}

$maior = maiorAB(maiorAB($n[A], $n[B]), $n[C]);

echo $maior.' eh o maior'.PHP_EOL;
