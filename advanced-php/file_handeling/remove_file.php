<?php
// how to open 
$file=fopen("name.txt","r+") or die("file is not available");
$res=unlink("name.txt");
if($res)
{
    echo "file deleted successfully";
}
fclose($file);

?>