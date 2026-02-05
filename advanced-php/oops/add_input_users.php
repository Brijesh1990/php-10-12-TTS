<?php 
class A 
{
    public function display()
    {
        if(isset($_POST["cls"]))
            {
                $a=$_POST["a"];
                $b=$_POST["b"];
                $c=$a+$b;
                echo "Additions of numbers is :".$c;

            }
    }
}

$obj=new A;
$obj->display();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        .app 
        {
            width: 30%;
            height: auto;
            margin: auto;
            margin-top: 5%;
            
        }
    </style>    
</head>
<body>

    <div class="app">
        <form method="post">
            <input type="text" name="a" placeholder="N1 values">
            <br><br>
            <input type="text" name="b" placeholder="N2 values">
            <br><br>
            <input type="submit" name="cls" value="Add">
            
        </form>
    </div>
    
</body>
</html>