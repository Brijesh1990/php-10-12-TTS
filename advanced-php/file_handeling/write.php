<?php
// how to open 
$file=fopen("ajax.txt","w") or die("file is not available");
if($file)
{
 echo "file opened successfully";
}
fclose($file);

?>