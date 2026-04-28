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
<div class="col-md-12 mb-4">
<div class="card card-box p-3">
<h2>Manage All customers</h2>

<!-- TABLE -->
<div class="card p-3 mt-3">
<table class="table table-striped mt-3">
<thead>
<tr>
<th>Order ID</th>
<th>Customer</th>
<th>Status</th>
<th>Amount</th>
</tr>
</thead>
<tbody>
<tr>
<td>#1001</td>
<td>Rahul</td>
<td><span class="badge bg-success">Completed</span></td>
<td>₹500</td>
</tr>
<tr>
<td>#1002</td>
<td>Priya</td>
<td><span class="badge bg-warning">Pending</span></td>
<td>₹1200</td>
</tr>
<tr>
<td>#1003</td>
<td>Amit</td>
<td><span class="badge bg-danger">Cancelled</span></td>
<td>₹800</td>
</tr>
</tbody>
</table>
</div>


</div>
</div>


</div>

</div>


