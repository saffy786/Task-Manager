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

echo "<a href='" . base_url() . "index.php/login/home'>To Home Page</a>";
?>
                </div>
    
    <p> <?php  echo "<a href='".site_url('login/loggedout')."'>Logout</a>" ?> </p> 
</body>

</html>