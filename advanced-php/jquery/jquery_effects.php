<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' media='screen' href='main.css'>
<style>
.app 
{
width: 40%;
height: auto;
margin: auto;
padding: 20px;    
}    
</style>    
<!-- called jquery CDN online -->
<script src="https://code.jquery.com/jquery-4.0.0.js"></script>
<script>
 $(document).ready(function(){
    $("#btn1").click(function(){

        /*$("#demo").hide("slow");*/ 
        $("#demo").hide(2000);
    })
     $("#btn2").click(function(){

        /*$("#demo").show("slow");*/ 
        $("#demo").show(2000);
    })

     $("#btn3").click(function(){
        /*$("#demo").toggle("slow");*/ 
        $("#demo").toggle(2000);
    })
 })
</script>
</head>
<body>
    <div class="app">
     <p id="demo"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium deleniti enim ea. Ducimus aliquid error assumenda odio tempora aperiam quod, quidem tenetur beatae provident sunt voluptate dolores voluptas cumque adipisci.</p>

     
    <button type="button" id="btn1">Hide</button>
    <button type="button" id="btn2">Show</button>
    <button type="button" id="btn3">Toggle</button>
    
    </div>    

</body>
</html>    