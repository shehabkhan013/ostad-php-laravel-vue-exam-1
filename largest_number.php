<?php
// Define the numbers
$num1 = 4;
$num2 = 5;
$num3 = 6;

// Initialize the largest number as the first number
$largest = $num1;

// Compare the second number with the largest number
if ($num2 > $largest) {
    $largest = $num2;
}

// Compare the third number with the largest number
if ($num3 > $largest) {
    $largest = $num3;
}

// Output the largest number
echo "The largest number is: $largest";

