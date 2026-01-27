<?php 
class Car 
{
    public function display1()
    {
        $name="Mercedes Live in";
        echo $name."<br>";
    }
}

class Garage extends Car
{
  public function display2()
  {
    $name="patel auto garage pvt ltd";
    echo $name;
  }
}

$obj=new Garage;
$obj->display1();
$obj->display2();

?>