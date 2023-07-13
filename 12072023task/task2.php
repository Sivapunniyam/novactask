<?php
$dir = "folder1//";
$folder__c =0;
$file__c =0;
function fcount($path) {
    global $folder__c;
    global $file__c;
    $all_f = scandir($path);
    foreach($all_f as $one_f){
        if($one_f != '.' AND $one_f !='..'){
            if (is_file($path .$one_f)) {
                $file__c+=1;
            }
            else{
                fcount($path . $one_f . "/");
                echo('##');
                echo($path.$one_f . "/");
                $folder__c +=1;
            }
        }
    }
}
fcount($dir);
echo("File count ----->   ". $file__c."\n");
echo("Folder count ----->   ". $folder__c."\n");
?>