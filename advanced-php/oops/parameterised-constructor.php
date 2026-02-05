<?php 
// pass parameter constructor 
class A 
{
    // parameterised  constructor magic method
    public function __construct($a,$b)
    {
        $c=$a+$b;
        echo $c;
    }
}
$obj=new A(10,20);
?>