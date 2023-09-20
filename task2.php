<?php
// Using a for loop to print numbers from 1 to 50, skipping multiples of 5
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        continue;
    }
    echo $i . " ";
}