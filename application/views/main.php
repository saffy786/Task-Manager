<!DOCTYPE HTML>
<html>

<head>
    <link href="<?php echo base_url() ."/css/style.css";?>" rel="stylesheet" type="text/css">
    <title>Task Manager Homepage</title>
</head>

<body>

    
          <p> <?php  echo "<a href='".site_url('login/loggedout')."'><button class='exit-btn exit-btn-4'>Logout</button></a>" ?> </p>
            
                    <h1>Welcome <?php echo $this->session->userdata('username');
        
                    ?>
                    </h1>
                     
		     
		   
     
		     <!-- Add task input box form -->
		     
                    <div class="add-task-input">
                     <?php
                     
                     echo form_open('addtask/addtaskform');
                     echo form_label('', 'taskName');
                     echo "<input type = 'text' name='taskName' placeholder='Task Name' Required>";
                     echo form_submit('submit', 'Add Task');
                     echo form_close();
                     
                     ?>
                   </div>
<h2>View Your Tasks</h2>
<div id="box1">		     
		     
		     
		     
		     
<div class="table1">
<? echo heading('Due Tasks',3); ?>
<table border="3">
  <tr>
    <th rowspan="50">Due Tasks</th>    
  </tr>                  
<?php

echo "<table class='task-colour'>";

echo "<tr class='table-header'><td>Task Name</td><td>Due Date</td></tr>";
// getting the date from 3 days to now //
$date_select = date("Y-m-d", strtotime('+3 days') );

foreach($tasks as $task)
	{
		    echo "<tr>";
		    
		    //active record  gets the date from database and if the due date is less than the date 3 days from now it displays the task//
		    if($task->due_date < $date_select){
				echo "<td>";
				echo $task->task_name;
				echo "</td>";
				echo "<td>";
				echo $task->due_date;
				echo "</td>";
		    }
		    echo "</tr>";
	}
echo "</table>"; 
echo "<hr>";

echo "<table><th>View Your Tasks</th></table>";

echo "<table class='table2'>";






	
foreach($tasks as $tasks)
	{    
	echo "<tr>";
	echo "<td><p><a href='" . base_url() . "index.php/addtask/updatetaskform/" . $tasks->id . "'><b>Task Name:</b> " . $tasks->task_name . "</a><br/></td>";
	echo "<td><b>Task Description:</b> " . $tasks->task_description . "<br/></td>";
	echo "<td><b>Due Date:</b>  " . $tasks->due_date . "<br/></td>";
	echo "<td><b>Create Date/Time:</b>  " . $tasks->create_date . "<br/></td>";
	echo "<td><b>Task Progress:</b>  " . $tasks->task_progress . "</p></td>";
	echo "</tr>"; 
	}

echo "</table>"; 
	

?>		   
		   
		   
          <br>     

   
    
</table>
</div>
</div>



</body>

</html>