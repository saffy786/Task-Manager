<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	
</head>
<body>

<div id="container">
	<h1>Task Manager</h1>

	<?php
	foreach ($tasks as $task){
		echo "<p>".$task->id.") Task Name: ".$task->task_name."</p>";
	}
	?>
</div>

</body>
</html>