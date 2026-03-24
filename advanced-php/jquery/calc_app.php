<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' media='screen' href='main.css'>
<!-- called jquery CDN online -->
<script src="https://code.jquery.com/jquery-4.0.0.js"></script>
<script>
$(document).ready(function(){
  //additions 
  $("#btn1").click(function(){
   var a=parseInt(prompt('Enter a values :'));
   var b=parseInt(prompt('Enter b values :'));
   var c=a+b;
   document.getElementById("res").innerHTML="Additions of numbers is :"+c;

  });
//substraction 
$("#btn2").click(function(){
   var a=parseInt(prompt('Enter a values :'));
   var b=parseInt(prompt('Enter b values :'));
   var c=a-b;
   document.getElementById("res").innerHTML="Substractions of numbers is :"+c;

  });
})
</script>
</head>
<body>
<p id="res"></p>    
<button type="button" id="btn1">Additions!</button>
<button type="button" id="btn2">Substractions!</button>
</body>
</html>