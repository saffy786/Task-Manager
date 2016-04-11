<!DOCTYPE HTML>
<html>

<head>
    <link href="<?php echo base_url() ."/css/style.css";?>" rel="stylesheet" type="text/css">
    <title>Task Manager Homepage</title>
</head>

<body>

    
         
            
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
<div id="box1">		     
		     
		     
		     
		     
<div class="table1">
<? echo heading('Due Tasks',3); ?>
<table border="3">
  <tr>
    <th rowspan="50">Due Tasks</th>    
  </tr>                  
<?php

echo "<table>";


// getting the date from 3 days to now //
$date_select = date("Y-m-d", strtotime('+3 days') );

foreach($tasks as $task)
	{
		    echo "<tr>";
		    echo "<td>";
		    //active record  gets the date from database and if the due date is less than the date 3 days from now it displays the task//
		    if($task->due_date < $date_select){
				echo $task->task_name . $task->due_date;	
		    }
		    echo "<td></tr><th>";
	}
echo "</table>"; 

echo "<table class='table2'>";

echo "<hr>";

echo ('View Your Tasks');

	
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

echo "</table>"; 
	

?>		   
		   
		   
          <br>     
    
    <p> <?php  echo "<a href='".site_url('login/loggedout')."'>Logout</a>" ?> </p>
    
</table>
</div>
</div>



</body>

</html>