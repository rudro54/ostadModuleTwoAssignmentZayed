<?php

function printFibonacciUptoANumber($number)
{

    $firstElement = 0;
    $secondElement = 1;

    echo $firstElement . " ," . $secondElement;

    for ($i = 2; $i <= $number - 1; $i++) {

        $newElement = $firstElement + $secondElement;

        echo ", " . $newElement;

        $firstElement = $secondElement;
        $secondElement = $newElement;

    }




}

printFibonacciUptoANumber(15);