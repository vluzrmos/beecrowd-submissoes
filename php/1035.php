<?php

list($a, $b, $c, $d) = array_map(fn ($n) => intval($n), explode(' ', fgets(STDIN)));

if ($b > $c && $d > $a && ($c + $d) > ($a + $b) && ($c > 0 && $d > 0) && $a % 2 ===0) {
    echo 'Valores aceitos'.PHP_EOL;
} else {
    echo 'Valores nao aceitos'.PHP_EOL;
}
