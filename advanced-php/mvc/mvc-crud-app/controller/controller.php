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
    
    // create a logic for swap two numbers 
    // if(isset($_POST["swp"]))
    // {
      //   $a=$_POST["a"];
      //   $b=$_POST["b"];
      //   $temp;
      //  //logic a=10,b=20 
      
      //  $temp=$a; // 10
      //  $a=$b;    // 20
      //  $b=$temp; // 10
      
      //  echo "<script>
      //  alert('after swap a is :'+$a+'after swap b is :'+$b)
      //  </script>"; 
      
      // }
    
    //create a logic for register users data 
    if(isset($_POST["btn_register"]))
    {
        date_default_timezone_set("Asia/Calcutta");
        $tmp_name=$_FILES["photo"]["tmp_name"];
        $photo="uploads/users/".$_FILES["photo"]["name"];
        move_uploaded_file($tmp_name,$photo);
        $fullname=$_POST["fullname"];
        $em=$_POST["email"];
        $pass=password_hash($_POST["password"],PASSWORD_DEFAULT);
        $cpass=password_hash($_POST["cpassword"],PASSWORD_DEFAULT);

        $phone=$_POST["phone"];
        $address=$_POST["address"];
        $added_date=date("d/m/Y H:i:s a");

        $data=array("photo"=>$photo,"fullname"=>$fullname,"email"=>$em,"password"=>$pass,"phone"=>$phone,"address"=>$address,"added_date_time"=>$added_date);

        $chk=$this->insalldata('tbl_register',$data);
        if($chk)
        {
        echo "<script>
        alert('Thanks you are successfully created your account')
        window.location='./login';
        </script>";
        }
    }     


    // create a logic to add data in contact us form 
   if(isset($_POST["btn_contact"]))
    {
        $name=$_POST["name"];
        $em=$_POST["email"];
        $phone=$_POST["phone"];
        $subject=$_POST["subject"];
        $message=$_POST["message"];

        $data=array("name"=>$name,"email"=>$em,"phone"=>$phone,"subject"=>$subject,"message"=>$message);
        $chk=$this->insalldata('tbl_contact',$data);
        if($chk)
        {
        echo "<script>
        alert('Thanks for contact with us we will contact with you Soon!')
        window.location='./contact';
        </script>";
        }
    }

    // load a views
    
    if(isset($_SERVER["PATH_INFO"]))
    {
      switch($_SERVER["PATH_INFO"])
      {
        // case '/':
        //     require_once("index.php");
        //     require_once("swap.php");
        //     break;

        case '/':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("content.php");
            require_once("footer.php");
            break;

        
        case '/login':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("login.php");
            break;    

        case '/register':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("register.php");
            break;    

            
        case '/dashboard':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("dashboard.php");
            break;

            
        case '/profile':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("profile.php");
            break;

        
        case '/products':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("products.php");
            break;    

            
        case '/product-details':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("product-details.php");
            break;    

            
        case '/cart':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("cart.php");
            break;
            
        case '/checkout':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("checkout.php");
            break;

            
        
         case '/contact':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("contact.php");
            break;    
        
        default:
           require_once("header.php");
           require_once("404.php");
           break;
                
            
      }
    } 

 }
}
$obj=new controller;
?>