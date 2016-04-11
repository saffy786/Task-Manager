<!DOCTYPE HTML>
<html>

<head>
    <link href="<?php echo base_url() ."/css/style.css";?>" rel="stylesheet" type="text/css">
    <title>Task Manager View All Tasks</title>
</head>

<body>

    
    
                
                    
                    <h1>Welcome <?php echo $this->session->userdata('username');
        
                    ?>
                    </h1>
                    
                     <h2>View Your Tasks</h2>

<div id="box1">		     
		     
		     
		     
		     
<div class="table1">
<? echo heading('List of Tasks',3); ?>
<table border="3">
  <tr>
    <th rowspan="20">List of Tasks</th>    
  </tr>  
		     
		     
  <?php

foreach($tasks as $tasks)
	{
	echo "<tr>";
	echo "<td><p><a href='" . base_url() . "index.php/addtask/updatetaskform/" . $tasks->id . "'><b>Task Name:</b> " . $tasks->task_name . "</a><br/></td>";
	echo "<td><b>Task Description:</b> " . $tasks->task_description . "<br/></td>";
	echo "<td><b>Due Date:</b>  " . $tasks->due_date . "<br/></td>";
	echo "<td><b>Create Date/Time:</b>  " . $tasks->create_date . "<br/></td>";
	echo "<td><b>Task Progress:</b>  " . $tasks->task_progress . "</p></td>";
	echo "<td></tr>"; 
	}
?>
  
  <p>
  <?php
echo "<a href='" . base_url() . "index.php/login/home'>Back To HomePage</a>";

      ?>          
</p>
  
    <p> <?php  echo "<a href='".site_url('login/loggedout')."'>Logout</a>" ?> </p>
    
    
    </table>
</div>
</div>
</body>

</html>