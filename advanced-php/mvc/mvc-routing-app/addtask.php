<div class="mx-auto bg-white p-5 task-box">
    <div class="row">
        <div class="col-md-12">
            <h3 class="">Good Evening</h3>
            <div class="mt-4">
                <!-- add task here -->
                <form method="post">
                    <div class="mb-3">
                        <label for="taskName" class="form-label">Task Name</label>
                        <input type="text" class="form-control" id="taskName" name="taskName" required
                        >
                    </div>

                     <div class="mb-3">
                        <label for="taskName" class="form-label">AssignTo</label>
                        <select name="assignto" class="form-control" id="taskName">
                        <option value="">-select employee-</option>
                        <?php 
                        foreach($employedata as $emp)
                        {
                        ?>
                        <option value="<?php echo $emp["employee_id"];?>"><?php echo $emp["employeename"];?></option>    
                        <?php 
                        }
                        ?>    
                    </select>
                    </div>

                    <div class="mb-3">
                        <label for="taskName" class="form-label">Task Level</label>
                        <select name="task_level" class="form-control" id="taskName">
                        <option value="">-select task level-</option>
                        <option value="simple">Simple</option>
                        <option value="intermediate">Intermediate</option><option value="advanced">Advanced</option>    
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="taskName" class="form-label">Added date</label>
                        <input type="date" class="form-control" id="taskName" name="added_date">
                    </div>
                    <div class="mb-3">
                        <label for="taskDescription" class="form-label">Task Description</label>
                        <textarea class="form-control" id="taskDescription" name="taskDescription"></textarea>
                    </div>
                    <button type="submit" name="addTask" class="btn btn-primary">Add Task</button>
                </form>
            </div>
        </div>
    </div>