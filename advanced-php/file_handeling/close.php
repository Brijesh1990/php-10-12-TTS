<?php
// how to open 
$file=fopen("hello.txt","r") or die("file is not available");
if($file)
{
 echo "file opened successfully";
}
fclose($file);

?>