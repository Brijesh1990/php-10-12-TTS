<!-- session set -->
<?php 
if(!isset($_SESSION["admin_id"]))
{
header("location:./");
}    
?>
<!-- bvalidator -->
<script>
$(document).ready(function(){
$("#addCat").bValidator();
})
</script> 

<!-- CONTENT -->
<div class="content">
<div class="row">
<div class="col-md-5 mb-4">
<div class="card card-box p-3">
<h5>Add Category Form</h5>
<form method="post" id="addCat">
<div class="mt-4">
<input type="text" name="catname" data-bvalidator="required,alpha" placeholder="CategoryName *" class="form-control" />
</div>
<div class="mt-4">
<input type="submit" name="btn_category" value="AddCategory"  class="btn btn-lg btn-dark text-white ms-0" />
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
<?php 
foreach($shwCat as $row)
{
?>
<tr>
<td><?php echo $row["catid"];?></td>
<td><?php echo $row["categoryname"];?></td>
<td>
<a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> delete</a>
| 
<a href="" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i> edit</a>
</td>
</tr>
<?php 
}
?>
</tbody>
</table>
</div>

</div>


