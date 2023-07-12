<?php
echo('Enter 1st Number ');
$number1 = floatval((fgets(STDIN)));
echo('Enter 2nd Number ');
$number2 =floatval((fgets(STDIN)));
echo('Enter Max approximate value ');
$diff =floatval((fgets(STDIN)));
if (abs($number1 - $number2) <= $diff)
    echo('1');
else
    echo('0');
?>