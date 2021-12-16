<?php

$value = doubleval(fgets(STDIN));
$intervals = ['[0,25]','(25,50]','(50,75]','(75,100]'];
$selectedInterval = null;

function isAtStart($value, $interval, $start)
{
    switch (substr($interval, 0, 1)) {
        case '(':
            return $value > $start;
        case '[':
            return $value >= $start;
    }

    return false;
}

function isAtEnd($value, $interval, $end)
{
    switch (substr($interval, -1, 1)) {
        case ')':
            return $value < $end;
        case ']':
            return $value <= $end;
    }

    return false;
}

foreach ($intervals as $interval) {
    $values = [];
    
    preg_match('/(?P<start>\d+),(?P<end>\d+)/', $interval, $values);
 
    if (isAtStart($value, $interval, $values['start']) && isAtEnd($value, $interval, $values['end'])) {
        $selectedInterval = $interval;
        break;
    }
}


if ($selectedInterval) {
    echo 'Intervalo '.$selectedInterval.PHP_EOL;
} else {
    echo 'Fora de intervalo'.PHP_EOL;
}
