<?php 
// scope resolution operator is denoted by ::
// scope resolution operator is very important in oops in php
// it is used to access class-level properties and methods without creating an object

// static properties 
// static methods 
// class constants
// parents class members

// class company
// {
//     public static $name="Bharti enterpises pvt ltd";
// }
// echo company::$name;


// class company
// {
//     public static function display()
//     {
//         $name="Bharti enterprises pvt ltd";
//         echo $name;
//     }
// }
// company::display();
// this is access our class properties by :: scope resolation operator 

class Calculator 
{
    public static function add($a,$b)
    {
        return $a+$b;
    }
}

echo Calculator::add(20,25);
?>