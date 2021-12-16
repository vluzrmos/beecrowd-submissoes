<?php

/**
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí
 */

$gasto = 12; //km/l
$tempoViagem = intval(fgets(STDIN));
$velocidadeMedia = intval(fgets(STDIN));

$quantidadeLitros = ($tempoViagem * $velocidadeMedia) / $gasto;

echo sprintf('%.3f', $quantidadeLitros).PHP_EOL;
