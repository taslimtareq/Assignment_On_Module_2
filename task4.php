<?php
// Function to generate and print the first n Fibonacci numbers
function printFibonacciSeries($n) {
    $fibonacciSeries = [];
    
    // The first two Fibonacci numbers
    $fibonacciSeries[0] = 0;
    $fibonacciSeries[1] = 1;
    
    // Generate the remaining Fibonacci numbers
    for ($i = 2; $i < $n; $i++) {
        $fibonacciSeries[$i] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
    }
    
    // Print the Fibonacci series
    for ($i = 0; $i < $n; $i++) {
        echo $fibonacciSeries[$i] . " ";
    }
}


printFibonacciSeries(15);
?>
