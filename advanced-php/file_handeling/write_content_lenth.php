<?php
// how to open 
$file=fopen("congratulations.txt","r+") or die("file is not available");
// $txt=fwrite($file,13);
// echo $txt;
echo fgets($file,17);
fclose($file);

?>