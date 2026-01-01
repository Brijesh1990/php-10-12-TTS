

<!-- create a modal for add users -->
<div class="modal fade" id="addUsers" role="dialog">
<div class="modal-dialog">
<div class="modal-content p-5">
<h3>Add Task</h3>
<hr class="w-25">
<form method="post" action="insert_task.php">
<div class="form-group mt-3">
<input type="text" name="task_name" placeholder="Task Name *" class="form-control" />    
</div>

<div class="form-group mt-3">
<select name="assign-to" class="form-control">
    <option value="">-Assign To-</option>
    <!-- fetch users -->
     <?php 
     $select="select * from tbl_assignto";
     $query=mysqli_query($conn,$select);
     while($fetch=mysqli_fetch_array($query))
     {
     ?>
    <option value="<?php echo $fetch["userid"];?>"><?php echo $fetch["username"];?></option>
    <?php 
     }
     ?>
</select>    
</div>

<div class="form-group mt-3">
<select name="status" class="form-control">
    <option value="">-status-</option>
    <option value="pending">pending</option>
    <option value="completed">completed</option>
</select>    
</div>
<div class="form-group mt-3">
<input type="date" name="added_date" placeholder="Name *" class="form-control" />    
</div>

<div class="form-group mt-3">
<input type="submit" name="addtask" value="Add Task"  class="btn btn-md btn-dark text-white" />    
</div>
</form>    
</div>
</div>
</div>
