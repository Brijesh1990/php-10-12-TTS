<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>crud app design</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!-- bootstrap stylesheet -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- external -->
<link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
<!-- data tables  -->
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.6/css/dataTables.dataTables.css">

<!-- icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<!-- js -->

<script src='main.js'></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
crossorigin="anonymous"></script>

</head>
<body>
<!-- navbar start here -->
<nav class="navbar navbar-expand-md bg-dark p-3">
<a href="" class="navbar-brand text-white fs-2">Task Manager App</a>    
<!-- button -->
<button type="button" class="btn btn-lg btn-white text-white fs-1 bg-dark navbar-toggler" data-bs-toggle="collapse" data-bs-target="#btn-Coll">
    <span class="bi bi-grid"></span>
</button> 

<div class="collapse navbar-collapse" id="btn-Coll">
<ul>
<li><a href="#">Home</a></li>
<li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" >account  <span class="bi bi-people"></span></a>
<ul class="dropdown-menu bg-dark">
<li><a href="#">Register</a></li>
<li><a href="#">Login</a></li>
</ul>
</li>
</ul>

</div>   
</nav> 
