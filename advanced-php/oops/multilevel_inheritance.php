<?php 
class Car 
{
    public function display1()
    {
        $name="Car Name is : Mercedes Live in";
        echo $name."<br>";
    }
}

class Garage extends Car
{
  public function display2()
  {
    $name="Garage name is : patel auto garage pvt ltd";
    echo $name."<br>";
  }
}

class Owner extends Garage 
{
    public function display3()
    {
        $fname="Owner name is : Ravi Patel";
        $address="Garage address : Ravi auto garage pvt ltd near <br> 150 feet ring road rajkot - 360005";

        echo $fname."<br>".$address;
    }

}



$obj=new Owner;
$obj->display1();
$obj->display2();
$obj->display3();

?>