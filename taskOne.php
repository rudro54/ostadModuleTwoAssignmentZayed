<?php

$start = 1;
$end = 20;
$step = 2;


// using for loop

echo "Using For Loop \n";

function printNumbers($start, $end, $step)
{

    for ($i = $start + 1; $i <= $end; $i += $step) {
        echo $i . "\n";
    }
}

printNumbers($start, $end, $step);


echo "Using While Loop \n";


// using while loop 

$i = $start + 1;
while ($i <= $end) {
    echo $i . "\n";
    $i += $step;
}


echo "Using do While Loop \n";

// using do while loop

$i = $start + 1;

do {
    echo $i . "\n";
    $i += $step;
} while ($i <= $end);