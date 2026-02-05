<?php
class product
{
    public function __construct()
    {
        echo "Product object created";
    }
} 
$obj=new product();
unset($obj); //destructor run here

?>
