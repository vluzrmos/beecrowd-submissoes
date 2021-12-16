<?php

/**
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí
 */

$seconds = intval(fgets(STDIN));

$hours = intval($seconds / 3600);
$minutes = intval($seconds % 3600 / 60);
$seconds = $seconds - (3600 * $hours) - (60 * $minutes);

echo sprintf('%d:%d:%d', $hours, $minutes, $seconds).PHP_EOL;
