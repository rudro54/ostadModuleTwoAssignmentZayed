<?php


$firstElement = 0;
$secondElement = 1;

echo $firstElement . " ," . $secondElement;

for ($i = 2; $i <= 9; $i++) {

    $newElement = $firstElement + $secondElement;

    if ($newElement < 100) {
        echo ", " . $newElement;
    }
    $firstElement = $secondElement;
    $secondElement = $newElement;

}