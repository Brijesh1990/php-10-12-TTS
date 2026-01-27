<?php 
interface A 
{
public function display1();
}

interface B 
{
public function display2();
}

interface C 
{
public function display3();
}
// used implements 
class D implements A,B,C 
{
public function display1()
{
echo "My name is Ravi"."<br>";

}
public function display2()
{
echo "My name is Varun"."<br>";

}
public function display3()
{
echo "My name is Dhaval"."<br>";

}
}
$obj=new D;
$obj->display1();
$obj->display2();
$obj->display3();

?>