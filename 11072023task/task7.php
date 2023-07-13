<?php
echo('Enter the value of x1,y1,r1 and x2,y2,r2 with space ');
$line = fscanf(STDIN, "%lf %lf %lf %lf %lf %lf", $x1, $y1, $r1, $x2, $y2, $r2);
$length = sqrt(($x2 - $x1)*($x2 - $x1) + ($y2 - $y1)*($y2 - $y1));

if($length + $r1 < $r2){
    echo("C1  is in C2");
}
elseif($length + $r2 < $r1){
    echo("C2  is in C1");
}
elseif($length <= $r1 + $r2){
    echo("Circumference of C1  and C2  intersect");
}
else{
echo("C1 and C2 do not overlap");
}
?>
