<?php
$dir="folder1//";
$file__c =0;
$folder__c =0;
function gcount($path){
$total_items  = glob($path."*");
foreach($total_items as $o_i){
    if($o_i != "." AND $o_i != "..") {
        if (is_file($o_i)){
            echo('file');
        }
        elseif(is_dir($o_i."/")){
            echo('#####');
            echo($o_i."/");
            gcount($o_i."/");
        }
}
}
}
gcount($dir)

?>