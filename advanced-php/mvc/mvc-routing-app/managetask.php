<!-- create a content -->
<div class="task-box mx-auto bg-white p-5">
<div class="row">
<div class="col-md-12">
<h2>Good Evening!</h2>
<h4>Manage All Tasks</h4>
<div class="card-body" style="overflow:auto">
<table class="table table-bordered table-striped overflow-auto">
<thead class="table-dark">
<tr>
<th>#</th>
<th>Task Name</th>
<th>employee_id</th>
<th>tasktype</th>
<th>added_date</th>
<th>descriptions</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
foreach($shwtask as $row)
{
?>
<tr>
<td><?php echo $row["task_id"];?></td>
<td><?php echo $row["taskname"];?></td>
<td><?php echo $row["employee_id"];?></td>
<td><?php echo $row["tasktype"];?></td>

<td><?php echo $row["added_date"];?></td>
<td><?php echo $row["descriptions"];?></td>
<td>
<button class="btn btn-sm btn-info">Edit</button>
<button class="btn btn-sm btn-danger">Delete</button>
</td>
</tr>

<?php 
}
?>
</tbody>
</table>
</div>

</div>
