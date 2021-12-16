<?php

$valor = doubleval(fgets(STDIN));

$notas = [100, 50, 20, 10, 5, 2];
$moedas = [1, 0.50, 0.25, 0.10, 0.05, 0.01];

echo sprintf('NOTAS:').PHP_EOL;

$valorInt = intval($valor);
$valorDec = explode('.', sprintf('%.2f', $valor))[1] / 100;

foreach ($notas as $nota) {
    $quantidade = intval($valorInt / $nota);
    $valorInt = $valorInt % $nota;

    echo sprintf('%d nota(s) de R$ %.2f', $quantidade, $nota).PHP_EOL;
}

$valorDec += $valorInt;
$valorDec = intval($valorDec * 100);

echo sprintf('MOEDAS:').PHP_EOL;

foreach ($moedas as $moeda) {
    $quantidade = intval($valorDec / intval($moeda * 100));
    $valorDec = $valorDec % intval($moeda * 100);

    echo sprintf('%d moeda(s) de R$ %.2f', $quantidade, $moeda).PHP_EOL;
}
