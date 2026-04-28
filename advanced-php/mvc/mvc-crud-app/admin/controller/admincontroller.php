<?php 
require_once("model/adminmodel.php");
class admincontroller extends adminmodel 
{
public function __construct()
{
parent :: __construct();
//create an logic for admin login
if(isset($_POST["btn_login"]))
{
$email=$_POST["email"];
$password=$_POST["password"];
$chk=$this->loginAdmin('tbl_admin',$email,$password);
if($chk)
{
echo "<script>
alert('You are Logged in successfully as Admin')
window.location='./dashboard';
</script>"; 
}
else 
{

echo "<script>
alert('Your admin email and password are Incorrect try again')
window.location='./';
</script>"; 
}
}

// create a logic for add category 
if(isset($_POST["btn_category"]))
{
$catname=$_POST["catname"];
$data=array("categoryname"=>$catname);
$chk=$this->insertAllData('tbl_addcategory',$data);
if($chk)
{
echo "<script>
alert('Category added successfully')
window.location='./addcategory';
</script>"; 
}
else 
{

echo "<script>
alert('Something went wrong while added category')
window.location='./addcategory';
</script>"; 
}
}

// create a logic to display all category
$shwCat=$this->selectAllData('tbl_addcategory');

// logic of logout admin
if(isset($_GET["logoutadmin"]))
{
$chk=$this->logoutAdmin();
if($chk)
{
echo "<script>
alert('You are Logout successfully')
window.location='./';
</script>"; 
} 
}
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