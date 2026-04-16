<?php 
$mainurl="http://localhost/php-10-12-tts/advanced-php/mvc/mvc-crud-app/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ecommerce</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<!-- bvalidator validations -->
<link rel="stylesheet" href="assets/css/red.css">
<!-- bvalidator js -->

</head>

<body>

<!-- Header -->
<header class="bg-dark text-white  p-3 top-0 position-sticky header">
<div class="row">
<div class="col-8"> <a href="<?php echo $mainurl;?>" class="text-decoration-none text-white"><h2 class="ms-5">MyShop</h2></a></div>   
<div class="col-4"><a href="<?php echo $mainurl;?>cart" class="text-decoration-none text-white"><h2>Cart <span class="bi bi-cart"><span class="badge badge-sm bg-danger text-white rounded-pill">0</span></h2></a></div>
</div>  
</header>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script src="assets/js/jquery.bvalidator.js"></script>

<script src="assets/js/default.min.js"></script>

<script src="assets/js/red.js"></script> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>