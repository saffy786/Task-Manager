<!DOCTYPE HTML>
<html>

<head>
    <link href="<?php echo base_url() ."/css/style.css";?>" rel="stylesheet" type="text/css">
    <title>Login</title>
</head>

<body>

    
         
                <div id="log_in">
                    <h1>Welcome <?php echo $this->session->userdata('username');
        
                    ?>
                    </h1>
                     
                    
                     <?php
                     
                     echo form_open('addtask/addtaskform');
                     echo form_label('', 'taskName');
                     echo "<input type = 'text' name='taskName' placeholder='Task Name' Required>";
                     echo form_submit('submit', 'Add Task');
                     echo form_close();
                     
                     ?>
                   
<h2>View Your Tasks</h2>
                    
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
		   
		   
                </div>
    
    <p> <?php  echo "<a href='".site_url('login/loggedout')."'>Logout</a>" ?> </p> 
</body>

</html>