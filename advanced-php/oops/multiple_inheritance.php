<?php 
class A 
{
   public function display1()
   {
    $name ="hi Brijesh";
    echo $name;
   }  
}

class B 
{
   public function display2()
   {
    $name1 ="hi Viraj";
    echo $name1;
   }  
}

class C extends A,B 
{
  public function display3()
   {
    $name2 ="hi Vipul";
    echo $name2;
   }      
}

$obj=new C;
$obj->display1();
$obj->display2();
$obj->display3();


?>