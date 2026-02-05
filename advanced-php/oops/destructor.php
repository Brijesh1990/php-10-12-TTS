<?php 
// destructor is destruct or removed the properties of constructor there used destructor 

class A 
{
     public function __construct()
     {
        echo "object created"."<br>";
     }
     public function __destruct()
     {
        echo "object destroyed";
     }
}
$obj=new A();
?>