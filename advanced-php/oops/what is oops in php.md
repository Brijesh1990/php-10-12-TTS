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
     An object is instance of class.

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
