<?php

/**
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí
 */


$dias = intval(fgets(STDIN));

$years = intval($dias / 365);
$months = intval($dias % 365 / 30);
$dias = $dias - (365 * $years) - (30*$months);

echo sprintf('%d ano(s)', $years).PHP_EOL;
echo sprintf('%d mes(es)', $months).PHP_EOL;
echo sprintf('%d dia(s)', $dias).PHP_EOL;
