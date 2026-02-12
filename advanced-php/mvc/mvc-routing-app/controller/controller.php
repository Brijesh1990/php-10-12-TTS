<?php 
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
     parent:: __construct();
    //load view here
    if(isset($_SERVER["PATH_INFO"]))
     {
         switch($_SERVER["PATH_INFO"])
         {
            case '/':
                require_once("index.php");
                require_once("header.php");
                require_once("navigation.php");
                require_once("content.php");
                require_once("footer.php");
                break;

            case '/add-task':
                require_once("index.php");
                require_once("header.php");
                require_once("navigation.php");
                require_once("addtask.php");
                require_once("footer.php");
                break;

                 case '/manage-task':
                require_once("index.php");
                require_once("header.php");
                require_once("navigation.php");
                require_once("managetask.php");
                require_once("footer.php");
                break;

            default: 
              require_once("index.php");
                require_once("header.php");
                require_once("navigation.php");
                require_once("404.php");
                require_once("footer.php");
                break;    

         }
     } 

    }

}
$obj=new controller;
?>