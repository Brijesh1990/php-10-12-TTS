<?php 

class A 
{
  public $name="Brijesh kumar pandey";  
  public function display()
  {
    //echo $name; //globally access
    // used pseudo variables 
    echo $this->name; 
  }
}
$obj=new A;
$obj->display();
?>