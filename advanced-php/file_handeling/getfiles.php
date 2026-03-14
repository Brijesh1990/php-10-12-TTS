<?php
// how to open 
$file=fopen("hello.txt","r") or die("file is not available");
$res=fgets($file);
echo $res;
fclose($file);

?>