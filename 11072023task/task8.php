<?php
echo('Enter Borrowing Amount ');
$amt = intval(fgets(STDIN));
echo('Enter Number of months ');
$m = intval(fgets(STDIN));
if ($m >= 0  && $m <=100){
for($i=0; $i<$m; $i++){
$amt = ceil(($amt * 1.05)/1000) * 1000;
}
echo($amt);
}
else{
    echo('Enter the month Greater than 0 and less than 100');
}
?>