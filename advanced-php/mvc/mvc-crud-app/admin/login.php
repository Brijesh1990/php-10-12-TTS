<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
background: linear-gradient(135deg, #1d2671, #c33764);
min-height: 100vh;
}

/* Left panel */
.login-info {
color: #fff;
padding: 60px;
animation: slideLeft 1s ease;
}

.login-info h1 {
font-weight: bold;
}

/* Right form */
.login-box {
background: #fff;
border-radius: 12px;
padding: 35px;
box-shadow: 0 10px 30px rgba(0,0,0,0.2);
animation: slideRight 1s ease;
}

/* Animations */
@keyframes slideLeft {
from {opacity: 0; transform: translateX(-60px);}
to {opacity: 1; transform: translateX(0);}
}

@keyframes slideRight {
from {opacity: 0; transform: translateX(60px);}
to {opacity: 1; transform: translateX(0);}
}

/* Input focus effect */
.form-control:focus {
box-shadow: 0 0 8px rgba(13,110,253,0.5);
border-color: #0d6efd;
}

/* Button animation */
.btn-login {
transition: 0.3s;
}

.btn-login:hover {
transform: scale(1.05);
}

/* Icon inside input */
.input-group-text {
background: #f1f1f1;
}

/* Mobile */
@media(max-width:768px){
.login-info {
text-align: center;
padding: 30px;
}
}
</style>
<!-- bvalidator validations -->
<link rel="stylesheet" href="assets/css/red.css">

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="assets/js/jquery.bvalidator.js"></script>
<script src="assets/js/default.min.js"></script>
<script src="assets/js/red.js"></script> 
<!-- bvalidator -->
<script>
$(document).ready(function(){
$("#adminLogin").bValidator();
})
</script> 
</head>
<body>
<div class="container">
<div class="row align-items-center min-vh-100">
<!-- LEFT SIDE -->
<div class="col-md-6 d-none d-md-block">
<div class="login-info">
<h1>Admin Panel</h1>
<p class="mt-3">Manage your store efficiently:</p>

<ul class="mt-4">
<li>✔ Manage Products</li>
<li>✔ Track Orders</li>
<li>✔ View Customers</li>
<li>✔ Analytics Dashboard</li>
</ul>
</div>
</div>

<!-- RIGHT SIDE -->
<div class="col-md-6 col-12">
<div class="login-box">
<h3 class="text-center mb-4">Admin Login</h3>
<form method="post" id="adminLogin">
<!-- Email -->
<div class="input-group mb-3">
<span class="input-group-text">
<i class="bi bi-envelope"></i>
</span>
<input type="email" data-bvalidator="required,email" name="email" class="form-control" placeholder="Admin Email">
</div>

<!-- Password -->
<div class="input-group mb-3">
<span class="input-group-text">
<i class="bi bi-lock"></i>
</span>
<input type="password" name="password" data-bvalidator="required,minlen[3],maxlen[15]" class="form-control" placeholder="Password">
</div>

<!-- Remember -->
<div class="form-check mb-3">
<input type="checkbox" class="form-check-input">
<label class="form-check-label">Remember me</label>
</div>
<!-- Button -->
<input type="submit" name="btn_login" class="btn btn-primary w-100 btn-login" value="Login" />
</form>
<!-- Extra -->
<div class="text-center mt-3">
<a href="#" class="text-decoration-none">Forgot Password?</a>
</div>
</div>
</div>
</div>
</div>

</body>
</html>