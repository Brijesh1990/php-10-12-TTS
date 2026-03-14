<?php
// how to open 
$file=fopen("name.txt","w+") or die("file is not available");
// $txt="javascript is a client side scripting language and it is also used as programming language";
// $res=fwrite($file,$txt);

$fname="Brijesh\n";
$lname="Pandey";
$res1=fwrite($file,$fname);
$res2=fwrite($file,$lname);
echo $res1.$res2;
fclose($file);
?>