<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/red.css" />
<!-- called jquery CDN online -->
<!-- <script src="https://code.jquery.com/jquery-4.0.0.js"></script> -->
 <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
		
<script src="js/jquery.bvalidator.min.js"></script>
<script src="js/default.min.js"></script>
<script src="js/red.js"></script>
<script>
$(document).ready(function(){
  $("#frm").bValidator();
})    
</script>
<script>
$(document).ready(function(){
/* element selector */
$("body").css({"margin":"0","padding":"0"})
/* id selector */
$("#header").css({"width":"100%","height":"auto","margin":"auto","padding":"20px","background-color":"coral","display":"flex","flex-wrap":"wrap"});
/* class selector */
$(".logo").css({"width":"20%","height":"auto","margin":"auto","padding":"10px"});

$(".search").css({"width":"60%","height":"auto","margin":"auto","padding":"10px"});

$(".search input").css({"width":"90%","height":"auto","margin":"auto","padding":"10px"});

$(".account").css({"width":"15%","height":"auto","margin":"auto","padding":"10px"});


/* class selector */

})    
</script>
</head>
<body>
<!-- header -->
<div id="header">
<div class="logo">JQuery App</div>
<div class="search"><input type="text" placeholder="Search content"></div>
<div class="account">Create account 👤</div>  
</div>
<!-- content -->
<div class="content">
<form id="frm" action="welcome.php" method="POST">
<h2>Contact Us</h2>

<div class="form-group">
<label for="name">Full Name</label>
<input type="text" id="name" name="name" data-bvalidator="required,alpha">
</div>

<div class="form-group">
<label for="email">Email Address</label>
<input type="email" id="email" name="email" data-bvalidator="required,email">
</div>

<div class="form-group">
<label for="subject">Subject</label>
<input type="text" id="subject" name="subject" data-bvalidator="required">
</div>

<div class="form-group">
<label for="message">Message</label>
<textarea id="message" name="message" data-bvalidator="required"></textarea>
</div>

<button type="submit">Send Message</button>
</form>

</div>
</body>
</html>