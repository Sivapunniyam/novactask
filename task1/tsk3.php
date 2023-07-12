<!-- Write a PHP program to check whether a number is an Armstrong number
or not. Return true if the number is Armstrong otherwise return false. Note:
An Armstrong number of three digits is an integer so that the sum of the
cubes of its digits is equal to the number itself. For example, 153 is an
Armstrong number since 1**3 + 5**3 + 3**3 = 153. -->
<?php 
$values=371;
 $sum = 0; 
 $x = $values; 
 while($x != 0) 
 { 
   $rem = $x % 10; 
   $sum = $sum + $rem*$rem*$rem; 
   $x = $x / 10; 
 } 
    if($values == $sum){
    echo("True");
    }
   	else{
       echo("False");  
    }  
?>  