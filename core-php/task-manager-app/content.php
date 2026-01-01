
<!-- content -->
<section id="content" class="container p-3 mt-5">
<h3>Manage All Task   <span class="badge badge-lg bg-dark pill rounded-pill">

<?php 
$select="select count(taskid) as totaltask from tbl_task";
$query=mysqli_query($conn,$select);
$fetch=mysqli_fetch_array($query);
echo $fetch["totaltask"];
?>
</span> <button type="button" class="btn btn-md btn-dark text-white float-end" data-bs-toggle="modal" data-bs-target="#addUsers">Add Task  <span class="bi bi-people"></span></button></h3>    
<hr class="w-25">
<div class="w-100 overflow-auto">
<table id="example" class="table table-responsive mt-5">
    <thead>
    <tr class="bg-dark text-white">
        <th>#</th>
        <th>Task</th>
        <th>asignTo</th>
        <th>Date</th>
        <th>status</th>
        <th>Action</th>
        </tr>
</thead>
        <!-- display all task -->
       <tbody> 
        <?php 
// echo $select="select tbl_task.*,username from tbl_task join tbl_assignto on tbl_task.userid=tbl_assignto.userid"; exit();

$select="select tbl_task.*,username from tbl_task join tbl_assignto on tbl_task.userid=tbl_assignto.userid";
$query=mysqli_query($conn,$select);
while($fetch=mysqli_fetch_array($query))
{
?>

    <tr>
        <td><?php echo $fetch["taskid"];?></td>
        <td><?php echo $fetch["taskname"];?></td>
        <td><?php echo $fetch["username"];?></td>
        <td><?php echo $fetch["added_date"];?></td>
        <td><?php echo $fetch["status"];?></td>
        
    
        <td><div style="min-width:80px"><a href="" class="btn btn-sm btn-danger"><span class="bi bi-trash"></span></a> | <a href="" class="btn btn-sm btn-primary"><span class="bi bi-pencil"></span></a></div></td>
    </tr>

    <?php 
}
?>
</tbody>
</table>
</div>
</section>


<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.3.6/js/dataTables.js"></script>
<script>
new DataTable('#example');
</script>