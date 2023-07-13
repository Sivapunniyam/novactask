<?php
$folder_count=0;
$file_count=0;
function listIt($path) {
    global $folder_count;
    global $file_count;
    $items = scandir($path);
    foreach($items as $item) {
    // Ignore the . and .. folders
    if($item != "." AND $item != "..") {
        if (is_file($path . $item)) {
            // echo "-> " . $item . " ";
            $file_count+=1;
        } else {
            // echo "---> " . $item;
            // echo(' ');
            $folder_count+=1;
            listIt($path . $item . "/");
        }
    }
    }
}
listIt("folder1//");
echo("folder count --- ".$folder_count."\n" );
echo("file count ----- ". $file_count."\n");

?>