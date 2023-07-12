<?php
echo('Enter Inputs with single space ');
$line = fgets(STDIN);
$arr = explode(" ", $line);
rsort($arr);
echo($arr[0]." ".$arr[1]." ".$arr[2]);
?>
