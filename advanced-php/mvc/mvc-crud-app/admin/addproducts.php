<!-- session set -->
<?php 
if(!isset($_SESSION["admin_id"]))
{
header("location:./");
}    
?>
<!-- CONTENT -->
<div class="content">
<div class="row">
<div class="col-md-5 mb-4">
<div class="card card-box p-3">
<h5>Add Products Form</h5>
<form method="post">
<div class="mt-4">
<select   name="catname" placeholder="select CategoryName *" class="form-control">
<option value="">-select category-</option>
</select>
</div>

<div class="mt-4">
<input type="file" name="photo" placeholder="Upload photo *" class="form-control" />
</div>

<div class="mt-4">
<input type="text" name="pname" placeholder="ProductName *" class="form-control" />
</div>

<div class="mt-4">
<input type="text" name="oldprice" placeholder="OldPrice *" class="form-control" />
</div>
<div class="mt-4">
<input type="text" name="offerprice" placeholder="OfferPrice *" class="form-control" />
</div>

<div class="mt-4">
<input type="text" name="qty" placeholder="Qty *" class="form-control" />
</div>

<div class="mt-4">
<textarea  name="desc" placeholder="Descriptions *" class="form-control"></textarea>
</div>

<div class="mt-4">
<input type="submit" name="add_products" value="AddProducts"  class="btn btn-lg btn-dark text-white ms-0" />
</div>
</form>
</div>
</div>

</div>

<!-- TABLE -->
<div class="card p-3 mt-3">
<h5>Manage Categories</h5>
<table class="table table-striped mt-3">
<thead>
<tr>
<th>Category ID</th>
<th>Name</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>#1001</td>
<td>Rahul</td>
<td><span class="badge bg-success">Completed</span></td>

</tr>
</tbody>
</table>
</div>

</div>


