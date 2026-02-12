<?php 
require_once("model/model.php");
class controller extends model 
{
  public function __construct()
  {
    // globally access 
    parent:: __construct();
    // print your name on view 
    // $name="hi my name is Viraj mehta"."<br>";
    // echo $name;

    // w.a.p to check a name is vailable in array or not 
    // $name=array("viraj","rensi","vipul","brijesh","prakruti");
    // if(in_array("mitesh",$name))
    // {
    //     echo "Name is availables in array list";
    // }
    // else 
    // {
        
    //     echo "Name is Not availables in array list";
    // }

    // w.a.p to print your name dynamically take input from users
    if(isset($_POST["chk"]))
    {
        $name=array("viraj","rensi","vipul","brijesh","prakruti");
        $nm=$_POST["name"];
        if(in_array($nm,$name))
        {
         print_r("<h6 align='center' class='alert alert-success p-2 w-25 mx-auto mt-5'>My name is :".$nm."</h6>");
        }
        else 
        {
          echo "<h6 align='center' class='alert alert-danger p-2 w-25 mx-auto mt-5'>Name not found</h6>";   
        }
    }

  }
}
$obj=new controller;

?>