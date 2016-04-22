<!DOCTYPE HTML>
<html>

<head>
    <link href="<?php echo base_url() ."/css/style.css";?>" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url() ."/js/jquery-2.2.3.min.js";?>"></script>
    <script src="<?php echo base_url() ."/js/script.js";?>"></script>
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

<div id="box1">		     
		     
		     
		     
		     
<div class="table1">
<? echo heading('Due Tasks',3); ?>
                   
<?php

echo "<table class='task-colour'>";
echo "<tr><th colspan='5'>Upcoming Deadlines</th></tr>";
echo "<tr class='table-header'><td>Task Name</td><td>Due Date</td><td>Task Progress</td></tr>";
// getting the date from 3 days to now //
$date_select = date("Y-m-d", strtotime('+3 days') );

foreach($tasks as $task)
	{
		    echo "<tr>";
		    
		    if ($task->task_progress=="Ready"){
			      if($task->due_date < $date_select){
				echo "<td class='green'>";
				echo $task->task_name;
				echo "</td>";
				echo "<td class='green'>";
				echo $task->due_date;
				echo "</td>";
				echo "<td class='green'>";
				echo $task->task_progress;
				echo "</td>";
			      }
		    }else if ($task->task_progress=="In Progress"){
			      if($task->due_date < $date_select){
				echo "<td class='yellow'>";
				echo $task->task_name;
				echo "</td>";
				echo "<td class='yellow'>";
				echo $task->due_date;
				echo "</td>";
				echo "<td class='yellow'>";
				echo $task->task_progress;
				echo "</td>";
			      }
		    }else{
			      if($task->due_date < $date_select){
				echo "<td class='red'>";
				echo $task->task_name;
				echo "</td>";
				echo "<td class='red'>";
				echo $task->due_date;
				echo "</td>";
				echo "<td class='red'>";
				echo $task->task_progress;
				echo "</td>";
			      }
		    }
		    
		    
		    
		    //active record  gets the date from database and if the due date is less than the date 3 days from now it displays the task//
		    
		    echo "</tr>";
	}
echo "</table>"; 
echo "<hr>";

//filter task progress, drop down list
echo "<select id='selectFilter' name='filter' onchange='filter();'>"; //on change activates js function
echo "<option value='noFilter'>Select Filter</option>";
echo "<option value='Not Started'>Not Started</option>";
echo "<option value='In Progress'>In Progress</option>";
echo "<option value='Ready'>Ready</option>";
echo "</select>";
echo "<span class='right'>Filter By Task Progress</span>";
echo "<br><hr>";





echo "<table id='table2' class='table2'>";
echo "<tr><th colspan='5'>Your Tasks</th></tr>";
echo "<tr class='table-header'><td>Task Name</td><td>Task Description</td><td>Due Date</td><td>Create Date/Time</td><td>Task Progress</td></tr>";

	
foreach($tasks as $tasks)
	{    
	echo "<tr>";
	echo "<td><p><a href='" . base_url() . "index.php/addtask/updatetaskform/" . $tasks->id . "'> " . $tasks->task_name . "</a><br/></td>";
	echo "<td>" . $tasks->task_description . "<br/></td>";
	echo "<td> " . $tasks->due_date . "<br/></td>";
	echo "<td>  " . $tasks->create_date . "<br/></td>";
	echo "<td> " . $tasks->task_progress . "</p></td>";
	echo "</tr>"; 
	}

echo "</table>"; 

 

?>		   
		   
	  
</div>
</div>



</body>

</html>