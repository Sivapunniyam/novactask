<?php  
$principle=(int)readline('Enter Princpal Amount: ');
$tenure=(int)readline('Enter Enter Tenure: ');
$interest=(int)readline('Enter Rate of interest: ');
       $si =   ($principle*$tenure*$interest)/(100);  
       echo("Simple Interest is: ");  
       echo($si);  
?>
