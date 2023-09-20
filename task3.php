<?php
// Function to calculate the nth Fibonacci number
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$firstTenFibonacciNumbers = [];
$count = 0;
$number = 0;

while ($count < 10) {
    // Calculate the next Fibonacci number
    $fibonacciNumber = fibonacci($number);

    // Check if the Fibonacci number is greater than 100
    if ($fibonacciNumber > 100) {
        // Break out of the loop if it's greater than 100
        break;
    }

    // Add the Fibonacci number to the array
    $firstTenFibonacciNumbers[] = $fibonacciNumber;

    // Increment the count and the number
    $count++;
    $number++;
}

// Print the first 10 Fibonacci numbers
echo "The first 10 Fibonacci numbers (up to 100): " . implode(", ", $firstTenFibonacciNumbers);

?>
