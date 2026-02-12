<?php 
class model 
{
    // decalred a connection variables
    public $conn="";
    public function __construct()
    {
        // connection created here
        try 
        {
         $this->conn=new mysqli("localhost","root","","mvcapp");
         //echo "connection successfully stablished"."<br>";
        }
        catch(err)
        {
          die(mysqli_error(err));
        }

    }
}


?>