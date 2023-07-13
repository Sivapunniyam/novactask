<?php
$str = file_get_contents('new.json');
$json_obj = json_decode($str, true);
$array = json_decode($str, true);
arsort($array);
array_multisort(array_column($array, 'salary'), SORT_DESC, $array);
// echo json_encode($array, JSON_PRETTY_PRINT);
print_r($array)
?>
