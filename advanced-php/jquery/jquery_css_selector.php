<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!-- called jquery CDN online -->
<script src="https://code.jquery.com/jquery-4.0.0.js"></script>
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
<div id="header">
<div class="logo">JQuery App</div>
<div class="search"><input type="text" placeholder="Search content"></div>
<div class="account">Create account 👤</div>  
</div>
</body>
</html>