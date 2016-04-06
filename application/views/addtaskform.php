<!DOCTYPE HTML>
 <html>
  <head>
   
   
  </head>
  <body>
   <h1>View All Tasks</h1>
   

  
   
<h1>List of Tasks</h1>

<?php
echo form_open('addtask/inserttask');
echo form_label('Task Name ', 'taskName');
echo "<input type='text' name='taskName' value='" . $taskName . "' required><br />";
echo form_label('Task Description ', 'taskDescription');
echo "<textarea name='taskDescription' required></textarea><br />";
echo form_label('Task End Date ', 'taskEnd');
echo "<input type='date' min='" . date("Y-m-d") . "' name='taskEnd' required><br />";
echo form_submit('submit', 'Add Task');
echo form_close();

echo "<a href='" . base_url() . "index.php/login/home'>To Home Page</a>";
?>


</body>

</html>
 
 
 
 