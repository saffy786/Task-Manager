<!DOCTYPE HTML>
<html>

<head>
    <title>Login</title>
</head>

<body>

    <h1>Task Manager</h1>
         
                <div id="log_in">
                    <p>Welcome <?php echo $this->session->userdata('username');
        
                    ?>
                    </p>
                    
                    
                     <h1>Your Tasks</h1>
                    
<?php

foreach($tasks as $tasks)
	{
	echo "<p><a href='" . base_url() . "index.php/addtask/updatetaskform/" . $tasks->id . "'><b>Task Name:</b> " . $tasks->task_name . "</a><br />";
	echo "<b>Task Description:</b> " . $tasks->task_description . "<br />";
	echo "<b>Due Date:</b>  " . $tasks->due_date . "<br />";
	echo "<b>Create Date:</b>  " . $tasks->create_date . "<br />";
	echo "<b>Task Progress:</b>  " . $tasks->task_progress . "</p>";
	}

?>
                     
                    
                     <?php
                     
                     echo form_open('addtask/addtaskform');
                     echo form_label('', 'taskName');
                     echo "<input type = 'text' name='taskName' placeholder='Task Name' Required>";
                     echo form_submit('submit', 'Add Task');
                     echo form_close();
                     
                     ?>
                   
                </div>
    
    <p> <?php  echo "<a href='".site_url('login/loggedout')."'>Logout</a>" ?> </p> 
</body>

</html>