<?php
    echo('Enter the Number ');
    $num = fgets(STDIN);
    echo('Enter 1st Position ');
    $pos1 = intval((fgets(STDIN)));
    echo('Enter 2nd position ');
    $pos2 = intval(fgets(STDIN));
    $bin_num = (decbin($num));
    if ($bin_num[$pos1] == $bin_num[$pos2]) {
      echo("true");
    } else {
      echo("false");
    }

?>