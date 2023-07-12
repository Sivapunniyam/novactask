<!-- Write a PHP program to check whether three given lengths (integers) of
three sides form a right triangle. Print "Yes" if the given sides form a right
triangle otherwise print "No". -->
<!-- Integers separated by a single space -->
<?php
$number=(string)readline('Enter the inputs with space ');
$str = str_replace(' ','',$number);
$a = $str[0];
$b = $str[1];
$c = $str[2];
$a *= $a;
$b *= $b;
$c *= $c;
if($a + $b == $c || $a + $c == $b || $b + $c == $a){
    echo ("YES");
}
else
{
    echo ("NO");
    }
?>