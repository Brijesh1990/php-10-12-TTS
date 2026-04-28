<?php 
$mainurl="http://localhost/php-10-12-tts/advanced-php/mvc/mvc-crud-app/admin/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- bvalidator validations -->
<link rel="stylesheet" href="assets/css/red.css">
<style>
body {
  background: #f4f6f9;
  overflow-x: hidden;
}

/* Sidebar */
.sidebar {
  width: 240px;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  background: #1f2937;
  color: #fff;
  padding-top: 20px;
  transition: 0.3s;
  animation: slideLeft 0.6s ease;
}

.sidebar a {
  color: #cbd5e1;
  display: block;
  padding: 12px 20px;
  text-decoration: none;
  transition: 0.3s;
}

.sidebar a:hover {
  background: #374151;
  color: #fff;
  padding-left: 25px;
}

/* Header */
.topbar {
  margin-left: 240px;
  background: #fff;
  padding: 15px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  display: flex;
  justify-content: space-between;
  align-items: center;
  animation: fadeDown 0.6s ease;
}

/* Content */
.content {
  margin-left: 240px;
  padding: 20px;
  animation: fadeUp 0.6s ease;
}

/* Footer */
.footer {
  margin-left: 240px;
  background: #fff;
  text-align: center;
  padding: 10px;
  position: relative;
  bottom: 0;
  box-shadow: 0 -2px 10px rgba(0,0,0,0.05);
}

/* Cards */
.card-box {
  transition: 0.3s;
}
.card-box:hover {
  transform: translateY(-5px);
}

/* Animations */
@keyframes slideLeft {
  from {opacity: 0; transform: translateX(-50px);}
  to {opacity: 1; transform: translateX(0);}
}

@keyframes fadeDown {
  from {opacity: 0; transform: translateY(-20px);}
  to {opacity: 1; transform: translateY(0);}
}

@keyframes fadeUp {
  from {opacity: 0; transform: translateY(30px);}
  to {opacity: 1; transform: translateY(0);}
}

/* Mobile Responsive */
@media(max-width:768px){
  .sidebar {
    width: 0;
    overflow: hidden;
  }

  .topbar,
  .content,
  .footer {
    margin-left: 0;
  }
}
</style>
</head>
<body>
<!-- TOP HEADER -->
<div class="topbar">
  <h5 class="mb-0">Dashboard</h5>

  <div>
    <i class="bi bi-bell me-3"></i>
    <i class="bi bi-person-circle fs-5"></i>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="assets/js/jquery.bvalidator.js"></script>
<script src="assets/js/default.min.js"></script>
<script src="assets/js/red.js"></script> 