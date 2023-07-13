<?php
$str = file_get_contents('new.json');
$array = json_decode($str, true);
array_multisort(array_column($array, 'salary'), SORT_DESC, $array);
print_r($array)
?>
