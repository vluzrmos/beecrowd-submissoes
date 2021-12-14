<?php

/**
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí
 */

const A = 0;
const B = 1;
const C = 2;

$pi = 3.14159;

$n = array_map(fn ($i) => doubleval($i), explode(' ', fgets(STDIN)));

$triangulo = ($n[A] * $n[C]) / 2;
$circulo = $pi * pow($n[C], 2);
$trapezio = (($n[A] + $n[B]) * $n[C]) / 2;
$quadrado = pow($n[B], 2);
$retangulo = $n[A] * $n[B];

echo sprintf('TRIANGULO: %.3f', $triangulo).PHP_EOL;
echo sprintf('CIRCULO: %.3f', $circulo).PHP_EOL;
echo sprintf('TRAPEZIO: %.3f', $trapezio).PHP_EOL;
echo sprintf('QUADRADO: %.3f', $quadrado).PHP_EOL;
echo sprintf('RETANGULO: %.3f', $retangulo).PHP_EOL;
