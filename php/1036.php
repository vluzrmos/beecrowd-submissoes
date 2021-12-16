<?php

list($a, $b, $c) = array_map(fn ($n) => doubleval($n), explode(' ', fgets(STDIN)));

$delta = pow($b, 2) - (4*$a*$c);
$div = 2*$a;

if ($div == 0 || $delta < 0) {
    echo 'Impossivel calcular'.PHP_EOL;
    return;
}

$r1 = (-$b + sqrt($delta)) / $div;
$r2 = (-$b - sqrt($delta)) / $div;

echo sprintf("R1 = %.5f", $r1).PHP_EOL;
echo sprintf("R2 = %.5f", $r2).PHP_EOL;
