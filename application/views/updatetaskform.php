<!DOCTYPE HTML>
 <html>
  <head>
   <link href="<?php echo base_url() ."/css/style.css";?>" rel="stylesheet" type="text/css">
   <title>Task Manager Update Task</title>
  </head>
  <body>


<?php

foreach($task as $taskData)
	{
	echo "<h2>Update Task: " . $taskData->task_name . "</h2>";
	?>
	<div id="box1">
	<div class="update-form">
	
	<?php
	echo form_open('addtask/updatetask');
	echo form_label('', 'taskId');
	
	echo "<input type='text' class='hide' name='taskId' value='" . $taskData->id . "' required>";
	echo form_label('Task Name: ', 'taskName');
	
	echo "<input type='text' name='taskName' value='" . $taskData->task_name . "' required><br />";
	echo form_label('Task Description: ', 'taskDescription');
	
	echo "<textarea name='taskDescription' class='textarea' required>" . $taskData->task_description . "</textarea><br />";
	echo form_label('Task End Date: ', 'taskEnd');
	
	echo "<input type='date' min='" . date("Y-m-d") . "' name='taskEnd' value='" . $taskData->due_date . "' required><br />";
	echo form_label('Task Progress: ', 'taskProgress');
	
	echo "<select name='taskProgress'>";
	echo "<option type='text' value='Not Started'>Not started</option>";
	echo "<option type='text' value='In Progress'>In Progress</option>";
	echo "<option type='text' value='Ready'>Ready</option>";
	echo "</select>";
        ?>
  <div class="update-button">
  <?php
        
	echo form_submit('submit', 'Update Task');
	?>
  </div>
	<?php
	echo form_close();
        
        
	echo form_open('addtask/deletetask');
	echo form_label('', 'taskId');
	echo "<input type='text' class='hide' name='taskId' value='" . $taskData->id . "' required>";
	?>
	
	 <div class="delete-button">
	  
	<?php
	echo form_submit('submit', 'Delete Task');
	?>
	</div>
	<?php
	echo form_close();
	}

	?>
<br>
	<p>
 <?php
echo "<a href='" . base_url() . "index.php/login/home'>To Home Page</a>";

?>
</p>
	
	
	
</div>
</div>
</body>

</html>
 
 
 
 