<?php

/**
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí
 */


$numeroFuncionario = intval(fgets(STDIN));
$horasTrabalhadas = intval(fgets(STDIN));
$valorHora = doubleval(fgets(STDIN));

$salario = $valorHora * $horasTrabalhadas;

echo sprintf("NUMBER = %d", $numeroFuncionario).PHP_EOL;
echo sprintf("SALARY = U$ %.2f", $salario).PHP_EOL;
