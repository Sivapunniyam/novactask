<!-- Arithmetic operations on character variables : $d = 'A00'. Using this
variable print the following numbers -->
<?php
$str = 'A00';
$numbers = intval(preg_replace('/[^0-9]/', '', $str));
$letters = preg_replace('/[^a-zA-Z]/', '', $str);
for ($x = $numbers; $x <= 20; $x++) {
    // if($x <=9 ){
    // $output = $letters.$numbers.$x;
    // echo "$output \n";
    // }
    // else{
    // $output = $letters.$x;
    // echo "$output \n";
    // }
    echo ++$str."\n";
} 
?>