<?php 
// pre defined constructor 
class A 
{
    // pre defined constructor magic method
    public function __construct()
    {
      $name="Hi i am viraj";
      echo $name;
    }
}
$obj=new A;
?>