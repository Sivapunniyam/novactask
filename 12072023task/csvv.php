
<?php
$file="emp.csv";
$csv= file_get_contents($file);
print_r(gettype($csv));
$array = array_map("str_getcsv", explode("\n", $csv));
$json = json_encode($array);
// print_r($array[0]);
?>