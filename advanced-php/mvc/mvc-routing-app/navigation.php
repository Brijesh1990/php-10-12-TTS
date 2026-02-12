<!-- create a toggler navbar  -->
<nav class="navbar bg-white  mt-5 m-auto border-bottom">
<div class="container-fluid">
<!-- Hamburger Button -->
<button class="navbar-toggler btn-rounded-pill  fs-1"
type="button"
data-bs-toggle="offcanvas"
data-bs-target="#offcanvasNavbar"
aria-controls="offcanvasNavbar">
<span class="bi bi-grid text-dark"></span>
</button>

<!-- Offcanvas Menu -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
<div class="offcanvas-header">
<h5 class="offcanvas-title text-success">welcome</h5>
<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
</div>

<div class="offcanvas-body">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link active" href="<?php echo $mainurl;?>">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?php echo $mainurl;?>add-task">Add Task</a>
</li>

<li class="nav-item">
<a class="nav-link" href="<?php echo $mainurl;?>manage-task">Manage Task</a>
</li>


<li class="nav-item">
<a class="nav-link" href="changepassword.php">Change Password</a>
</li>

<li class="nav-item">
<a class="nav-link btn btn-sm btn-danger w-25 text-white" href="logout.php" onclick="return confirm('Are you sure you want to logout?')">Logout ?</a>
</li>
</ul>
</div>
</div>
</div>
</nav>