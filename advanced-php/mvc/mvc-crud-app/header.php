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
<header class="bg-primary text-white p-3 top-0  header">
  <div class="container-fluid">
    <div class="row align-items-center">

      <!-- Logo -->
      <div class="col-md-3 col-6">
        <h3 class="mb-0">
          <a href="#" class="text-white text-decoration-none">MyShop</a>
        </h3>
      </div>

      <!-- Search Box -->
      <div class="col-md-5 d-none d-md-block">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search products...">
          <button class="btn btn-warning" type="submit">
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>

      <!-- Right Side (Social + Cart) -->
      <div class="col-md-4 col-6 text-end">

        <!-- Social Icons -->
        <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
        <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>

        <!-- Cart Icon with Badge -->
        <a href="#" class="text-white position-relative text-decoration-none">
          <i class="bi bi-cart fs-5"></i>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            0
          </span>
        </a>

      </div>

    </div>

    <!-- Mobile Search -->
    <div class="row mt-3 d-md-none">
      <div class="col-12">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search products...">
          <button class="btn btn-warning" type="submit">
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>
    </div>

  </div>
</header>
<!-- OFFCANVAS CART (Left Sidebar) -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="cartSidebar">
<div class="offcanvas-header">
<h5 class="offcanvas-title">Your Cart</h5>
<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
</div>

<div class="offcanvas-body">
<p>No items in cart</p>
<hr>
<div class="d-flex justify-content-between">
<strong>Total:</strong>
<strong>₹0</strong>
</div>

<button class="btn btn-success w-100 mt-3">Checkout</button>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="assets/js/jquery.bvalidator.js"></script>
<script src="assets/js/default.min.js"></script>
<script src="assets/js/red.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>