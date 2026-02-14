<?php 
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
     parent:: __construct();
    //create a logic to fetch employee in add task as dropdown
    $employedata=$this->selectalldata('tbl_employee');
    // create a logic for insert task data 
    if(isset($_POST["addTask"]))
        {
            $taskname=$_POST["taskName"];
            $assignto=$_POST["assignto"];
            $tasklevel=$_POST["task_level"];
            $addate=$_POST["added_date"];
            $desc=$_POST["taskDescription"];            
            $data=array("taskname"=>$taskname,"employee_id"=>$assignto,"tasktype"=>$tasklevel,"added_date"=>$addate,"descriptions"=>$desc);
            $chk=$this->insertalldata('tbl_task',$data);
            if($chk)
                {
                    echo "<script>
                    alert('Task added successfully')
                    window.location='./add-task';
                    </script>";
                }
                else 
                    {
                    echo "<script>
                    alert('something went wrong')
                    window.location='./add-task';
                    </script>";
                    }
            
        }  
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