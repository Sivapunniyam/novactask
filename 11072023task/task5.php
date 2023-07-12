<?php
echo('Enter Number of lines ');
$number = intval((fgets(STDIN)));
echo (($number*$number+$number+2)/2);
?>