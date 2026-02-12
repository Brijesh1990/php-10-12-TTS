<div class="mx-auto bg-white p-5 task-box">
    <div class="row">
        <div class="col-md-12">
            <h2 class="">Good Evening, <br>!</h2>
            <div class="mt-4">
                <!-- add task here -->
                <form method="post" action="addtask.php">
                    <div class="mb-3">
                        <label for="taskName" class="form-label">Task Name</label>
                        <input type="text" class="form-control" id="taskName" name="taskName">
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