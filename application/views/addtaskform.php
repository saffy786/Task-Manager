<!DOCTYPE HTML>
 <html>
  <head>
   <link href="<?php echo base_url() ."/css/style.css";?>" rel="stylesheet" type="text/css">
   
  </head>
  <body>
   
   
<h2>Edit A Task</h2>

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
 
 
 
 