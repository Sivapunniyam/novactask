<!-- Write a PHP function to test whether a number is greater than 30, 20 or 10
using ternary operator. -->
<?php
// $number=(string)readline('Enter Your Name: ');
$number = fgets(STDIN );
$output = ($number > 30) ? "30" : ($number > 20  ? "20" :($number > 10  ? "10":"Less than 10"));
echo "Given number is greater than ". $output;
?>
