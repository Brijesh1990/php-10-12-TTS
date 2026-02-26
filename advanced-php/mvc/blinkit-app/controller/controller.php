<?php 
require_once("model/Model.php");
class Controller extends Model 
{
  public function __construct()
  {
    parent:: __construct();
    //set routing of templates 
    if(isset($_SERVER["PATH_INFO"]))
        {
         switch($_SERVER["PATH_INFO"])
         {
            case '/':
                require_once("index.php");
                require_once("header.php");
                require_once("slider.php");
                require_once("content.php");
                require_once("footer.php");
                require_once("login.php");
                require_once("cart.php");                
                break;

                case '/about-us':
                require_once("index.php");
                require_once("header.php");
                require_once("about.php");
                require_once("footer.php");
                require_once("login.php");
                require_once("cart.php");
                break;

                
                case '/careers':
                require_once("index.php");
                require_once("header.php");
                require_once("career.php");
                require_once("footer.php");
                require_once("login.php");
                require_once("cart.php");

                break;
                
                case '/faq':
                require_once("index.php");
                require_once("header.php");
                require_once("faq.php");
                require_once("footer.php");
                break;
                
                case '/products':
                require_once("index.php");
                require_once("header.php");
                require_once("products.php");
                require_once("footer.php");
                require_once("login.php");
                require_once("cart.php");

                break;

                case '/register':
                require_once("index.php");
                require_once("header.php");
                require_once("register.php");
                require_once("footer.php");
                require_once("login.php");
                require_once("cart.php");
                break;

                default:
                require_once("index.php");
                require_once("header.php");
                require_once("404.php");
                require_once("footer.php");
                break;

         }   

        }

  }  
}
$obj=new Controller;

?>