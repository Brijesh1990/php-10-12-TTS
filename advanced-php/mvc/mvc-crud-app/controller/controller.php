<?php 
require_once("model/model.php");
class controller extends model 
{
 public function __construct()
 {
    parent :: __construct();
    // create to print hello world
    // $name="Hello world";
    // echo $name;
    // load a views
    
    // create a logic for swap two numbers 
    if(isset($_POST["swp"]))
    {
      $a=$_POST["a"];
      $b=$_POST["b"];
      $temp;
     //logic a=10,b=20 

     $temp=$a; // 10
     $a=$b;    // 20
     $b=$temp; // 10
     
     echo "<script>
     alert('after swap a is :'+$a+'after swap b is :'+$b)
     </script>"; 
      
    }

    if(isset($_SERVER["PATH_INFO"]))
    {
      switch($_SERVER["PATH_INFO"])
      {
        case '/':
            require_once("index.php");
            require_once("swap.php");
            break;
        default:
           require_once("404.php");
           break;
                
            
      }
    } 

 }
}
$obj=new controller;
?>