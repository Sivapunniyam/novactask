<?php
$file = fopen('emp.csv', 'r');
$var = fgetcsv($file);
while (($line = fgetcsv($file)) !== FALSE) {
    $arcs[]= array_combine($var,$line); 
}
$jar =json_encode($arcs,JSON_PRETTY_PRINT);
echo($jar);
$fp = fopen('new.json', 'w');
fwrite($fp, $jar);
fclose($file);
?>