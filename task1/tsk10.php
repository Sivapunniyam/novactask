
<?php
$amount = (int)readline('Enter Amount: ');
$rate = (int)readline('Enter Intrest rate: ');
$months = (int)readline('Enter Number of months: ');
$r= $rate/(12*100);
$emi = $amount * $r * (pow(1 + $r, $months) / (pow(1 + $r, $months) - 1) );
echo("Monthly EMI ". $emi);
?>