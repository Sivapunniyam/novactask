Write a PHP program to get the following input and generate output as
given below.
a. Input: 1,2,3,6,7,8,9,10,12
b. Output: 1-3, 6-10, 12
<?php
$n=[1,2,3,6,7,8,9,10,12];
$stat=$n[0];
$ends=0;
$siz=sizeof($n);
for($i=1;$i<sizeof($n);$i++)
{
    if($n[$i]-$n[$i-1] == 1){
        $ends = $n[$i];
    }
    else{
        $stat = $n[$i];
    }
}
echo($stat.'-'.$ends);
?>
