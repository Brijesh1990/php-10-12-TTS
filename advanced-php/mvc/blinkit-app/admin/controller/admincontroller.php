<?php 
require_once("model/adminmodel.php");
class Controller extends Model 
{
  public function __construct()
  {
    parent:: __construct();
    // create an logic of admin Login
    if(isset($_POST["admin_login"]))
    {
       $email=$_POST["email"];
       $password=$_POST["password"];
       $chk=$this->adminLogin('tbl_admin',$email,$password);
       if($chk)
        {
         echo "<script>
         alert('You are LoggedIn with admin successfully')
         window.location='./dashboard'
         </script>";
        }
        else 
        {
          echo "<script>
         alert('Your  email and password are Incorrect')
         window.location='./'
         </script>";
        }
    }

    // create an logic of session logout 
      if(isset($_GET["adminlogout"]))
      {
         $chk=$this->LogoutAdmin();
         if($chk)
          {
         echo "<script>
         alert('You are logout successfully')
         window.location='./'
         </script>";
          }
      }
    //set routing of templates 
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
                require_once("content.php");
                require_once("footer.php");
                break;
                
                case '/change-password':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("changepassword.php");
                require_once("footer.php");
                break;
                case '/add-category':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("addcategory.php");
                require_once("footer.php");
                break;
                case '/manage-category':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("managecategory.php");
                require_once("footer.php");
                break;
                case '/add-product':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("addproduct.php");
                require_once("footer.php");
                break;
                case '/manage-product':
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("manageproduct.php");
                require_once("footer.php");
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