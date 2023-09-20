<?php

//Using for loop to print even numbers from 1 to 20
function printEvenNumbersUsingForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

$start = 1;
$end = 20;
$step = 1;

echo "Using for loop: ";
printEvenNumbersUsingForLoop($start, $end, $step);
echo "\n";

//
function printEvenNumbersUsingWhileLoop($start, $end, $step) {
    while ($start <= $end) {
        if ($start % 2 == 0) {
            echo $start . " ";
        }
        $start += $step;
    }
}

$start = 1;
$end = 20;
$step = 1;

echo "Using while loop: ";
printEvenNumbersUsingWhileLoop($start, $end, $step);
echo "\n";


//Using do-while loop to print even numbers from 1 to 20
function printEvenNumbersUsingDoWhileLoop($start, $end, $step) {
    do {
        if ($start % 2 == 0) {
            echo $start . " ";
        }
        $start += $step;
    } while ($start <= $end);
}

$start = 1;
$end = 20;
$step = 1;

echo "Using do-while loop: ";
printEvenNumbersUsingDoWhileLoop($start, $end, $step);
echo "\n";

?>