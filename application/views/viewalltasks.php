<!DOCTYPE HTML>
<html>

<head>
    <link href="<?php echo base_url() ."/css/style.css";?>" rel="stylesheet" type="text/css">
    <title>Task Manager View All Tasks</title>
</head>

<body>

    <p> <?php  echo "<a href='".site_url('login/loggedout')."'><button class='exit-btn exit-btn-4'>Logout</button></a>" ?> </p>
    
                
                    
                    <h1>Welcome <?php echo $this->session->userdata('username'); // displays the users name with a "Welcome"
        
                    ?>
                    </h1>
                    
                     <h2>View Your Tasks</h2>

<div id="box1">		     
		     
		     
	<!--inserts it into a table-->	     
		     
<div class="table1">
<? echo heading('List of Tasks',3); ?>
<table border="3">
  <tr>
    <th colspan="5">List of Tasks</th>    
  </tr>
  <tr>
    <th>Task Name</th>
    <th>Task Description</th>
    <th>Due Date</th>
    <th>Create Date/Time</th>
    <th>Task Progress</th>  
  </tr>  
		     
		     
  <?php

foreach($tasks as $tasks)
	{
	echo "<tr>";
	echo "<td><p><a href='" . base_url() . "index.php/addtask/updatetaskform/" . $tasks->id . "'>" . $tasks->task_name . "</a><br/></td>";
	echo "<td>" . $tasks->task_description . "<br/></td>";
	echo "<td>" . $tasks->due_date . "<br/></td>";
	echo "<td>" . $tasks->create_date . "<br/></td>";
	echo "<td>" . $tasks->task_progress . "</p></td>";
	echo "</tr>"; 
	}
?>
  
  <p>
  <?php
echo "<a href='" . base_url() . "index.php/login/home'>Back To HomePage</a>";

      ?>          
</p>
   
    
    
    </table>
</div>
</div>
</body>

</html>