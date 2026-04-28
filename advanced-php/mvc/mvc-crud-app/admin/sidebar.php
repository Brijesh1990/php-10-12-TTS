<!-- SIDEBAR -->
<div class="sidebar">
<h4 class="mb-4 ms-4"><?php echo rtrim($_SESSION["email"],"@gmail.com");?></h4>

<a href="<?php echo $mainurl;?>dashboard"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>

<a href="<?php echo $mainurl;?>addcategory"><i class="bi bi-box-seam me-2"></i> Add Category</a>

<a href="<?php echo $mainurl;?>addproducts"><i class="bi bi-box-seam me-2"></i>Add Products</a>

<a href="<?php echo $mainurl;?>manageorders"><i class="bi bi-cart me-2"></i>Manage Orders</a>

<a href="<?php echo $mainurl;?>managecustomers"><i class="bi bi-people me-2"></i>Manage Customers</a>

<a href="<?php echo $mainurl;?>managereports"><i class="bi bi-bar-chart me-2"></i>Manage Reports</a>

<a href="<?php echo $mainurl;?>?logoutadmin" onclick="return confirm('Are you sure to logout as Admin ?')" class="btn btn-sm btn-danger text-white w-50 ms-4 mt-4"><i class="bi bi-power me-2" ></i> Logout</a>

</div>
