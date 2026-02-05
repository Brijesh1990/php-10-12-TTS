<?php 
//constructor is a same name of the  class  
//when we create an object of class constructor automatically called

// types of constructor 
//   1) user defined constructor 
//   2) pre-defined constructor
//   3) parameterised constructor 


class A 
{
    public function __construct()
    {
        $name="Brijesh";
        echo $name;
    }
}

$obj=new A;

?>