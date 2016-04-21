<!DOCTYPE HTML>
 <html>
  <head>
   <link href="<?php echo base_url() ."/css/style.css";?>" rel="stylesheet" type="text/css">
   <title>Task Manager Edit Task</title>
  </head>
  <body>
   
   
<h2>Edit A Task</h2>
<div id="box1">
 <div class="edit-form">
<?php
echo form_open('addtask/inserttask');
echo form_label('Task Name: ', 'taskName');
echo "<input type='text' name='taskName' value='" . $taskName . "' required><br/>";

echo form_label('Task Description: ', 'taskDescription');
echo "<textarea name='taskDescription' class='textarea' required></textarea><br/>";

echo form_label('Task End Date: ', 'taskEnd');
echo "<input type='date' min='" . date("Y-m-d") . "' name='taskEnd' required><br/>";

echo form_submit('submit', 'Add Task');
echo form_close();

?>

<br>
 
<p>
 
 
<?php
echo "<a href='" . base_url() . "index.php/login/home'>To Home Page</a>"; // link to go to the Homepage

?>
</p>


</div>
</div>
</body>

</html>
 
 
 
 