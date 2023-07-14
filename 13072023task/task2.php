<?php
$str = file_get_contents('new.json');
$array = json_decode($str, true);
$new = array_filter($array, function ($var) {
    return ($var['salary'] < 23000 );
});
print_r($new);
?>