# what is oops in php 
oops stands for object oriented programming language 
oops is used in php to support class | object | inheritance etc. 
oops is used to support MVC architecture
oops is used in advanced php i.e php5 | php 7 | php8
oops stands for object oriented programming language
in advanced php we used MVC architectures and MVC support oops
MVC support oops and it is a part of  advanced php
MVC stands for model - view - controller 
oops provides securities i.e access modifier | access specifier | data hiding process.

## oops features   
1. class 
2. object 
3. inheritance 
4. polymorphism 
5. encapsulation
6. abstraction   


## Advantages of oops 
1. oops used in advanced php i.e php5 | php 7 | php 8
2. oops used to provides securities 
3. oops used in php for data hiding process 
4. oops used access modifier for securities that are private | public | protected

## what is class in php ?

```
A class is group of member and its member function that is called class 
or
A class is nothing whenever we can not provides or create  its object 
or
A class is a blue print of an object 

Note : we create an object of class using new keyword 

```

## examples of class in php 

```

<?php 
class A 
{
public function display()
{
$name="my name is Viraj";
echo $name;
}
}
//create an object 
$obj=new A();
$obj->display();

?>

```



## what is object in php ?

```
An object is and instance of class.

Note : we create an object of class using new keyword 

```
## examples of object in php 

```

<?php 
class A 
{
public function add()
{
$a=10;
$b=20;
$c=$a+$b;
echo "The additions of numbers is :".$c;
}
}
//create an object 
$obj=new A(); //here A is an object of class A 
$obj->add();

?>

```

## what is pseudo variable in oops in php ? 

1. pseudo variable is used to access any member function globally in oops 
2. pseudo variable is used to called with $this
3. pseudo variables access any variables globally inside of member function 

```
<?php 

class A 
{
public $name="Brijesh kumar pandey";  
public function display()
{
//echo $name; //globally access
// used pseudo variables 
echo $this->name; 
}
}
$obj=new A;
$obj->display();
?>

```   

## what is inheritance in oops ?

inheritance is used to access any parent class properties by its child class that is called inheritance. 

Note : inheritance is used by extends keyword

## types of inheritance 

1. single inheritance 
2. multilevel inheritance 
3. multiple inheritance (its not supported in php)

## single inheritance :

parent class properties used by its one child class only that is called single inheritance. 

examples :  A => B

```
<?php 
class Car 
{
public function display1()
{
$name="Mercedes Live in";
echo $name."<br>";
}
}

class Garage extends Car
{
public function display2()
{
$name="patel auto garage pvt ltd";
echo $name;
}
}

$obj=new Garage;
$obj->display1();
$obj->display2();

?>

```   

## multilevel_inheritance  

multilevel inheritance is used to access parent class properties via its child class on hierarical based.

examples : A => B => C => D => E

```
<?php 
class Car 
{
public function display1()
{
$name="Car Name is : Mercedes Live in";
echo $name."<br>";
}
}

class Garage extends Car
{
public function display2()
{
$name="Garage name is : patel auto garage pvt ltd";
echo $name."<br>";
}
}

class Owner extends Garage 
{
public function display3()
{
$fname="Owner name is : Ravi Patel";
$address="Garage address : Ravi auto garage pvt ltd near <br> 150 feet ring road rajkot - 360005";

echo $fname."<br>".$address;
}
}
$obj=new Owner;
$obj->display1();
$obj->display2();
$obj->display3();

?>

```

## multiple inheritance 

when a single parent class access via its multiple child class that is called multiple inheritance 

    A 

B        C  

Note : multiple inheritance is not supported in php only c++ and python will supported multiple inheritance. 

```
<?php 
class A 
{
   public function display1()
   {
    $name ="hi Brijesh";
    echo $name;
   }  
}

class B 
{
   public function display2()
   {
    $name1 ="hi Viraj";
    echo $name1;
   }  
}

class C extends A,B 
{
  public function display3()
   {
    $name2 ="hi Vipul";
    echo $name2;
   }      
}

$obj=new C;
$obj->display1();
$obj->display2();
$obj->display3();


?>

```

## interface in php 
   
   interface is used to access multiple parent class properties via one child class it is also used to support just like multiple inheritance in php.

   Note : we create multiple interface and access its in child class we used implements.
 
   1. interface can not contain method bodies 
   2. A class uses implements keyword to use an interface
   3. A class must implement all method of an interface
   4. php support multiple interface (just like multiple inheritance )

   examples :

   ```
<?php 
interface A 
{
public function display1();
}

interface B 
{
public function display2();
}

interface C 
{
public function display3();
}
// used implements 
class D implements A,B,C 
{
public function display1()
{
echo "My name is Ravi"."<br>";

}
public function display2()
{
echo "My name is Varun"."<br>";

}
public function display3()
{
echo "My name is Dhaval"."<br>";

}
}
$obj=new D;
$obj->display1();
$obj->display2();
$obj->display3();

?>

   ```
