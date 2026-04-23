<?php 
require_once("model/adminmodel.php");
class admincontroller extends adminmodel 
{
 public function __construct()
 {
    parent :: __construct();

    // load a admin views    
    if(isset($_SERVER["PATH_INFO"]))
    {
      switch($_SERVER["PATH_INFO"])
      {

        case '/':
            require_once("index.php");
            require_once("login.php");
            break;

        case '/dashboard':
            require_once("index.php");
            require_once("header.php");
            require_once("sidebar.php");
            require_once("dashboard.php");
            require_once("footer.php");
            break;
            
        case '/addcategory':
            require_once("index.php");
            require_once("header.php");
            require_once("sidebar.php");
            require_once("addcategory.php");
            require_once("footer.php");
            break;

        case '/addproducts':
            require_once("index.php");
            require_once("header.php");
            require_once("sidebar.php");
            require_once("addproducts.php");
            require_once("footer.php");
            break;

            
        case '/managecustomers':
            require_once("index.php");
            require_once("header.php");
            require_once("sidebar.php");
            require_once("managecustomers.php");
            require_once("footer.php");
            break;


            
            
        case '/manageorders':
            require_once("index.php");
            require_once("header.php");
            require_once("sidebar.php");
            require_once("manageorders.php");
            require_once("footer.php");
            break;

            
            
        case '/managereports':
            require_once("index.php");
            require_once("header.php");
            require_once("sidebar.php");
            require_once("managereports.php");
            require_once("footer.php");
            break;

           default:
           require_once("header.php");
           require_once("404.php");
           break;        
            
      }
    } 

 }
}
$obj=new admincontroller;
?>