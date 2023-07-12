<?php
$string = trim(fgets(STDIN));
$vsd= preg_match_all('/[aeiou]/', $string);
echo ($vsd);
?>              