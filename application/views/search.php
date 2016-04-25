<!DOCTYPE HTML>
<html>

<head>
    <link href="<?php echo base_url() ."/css/style.css";?>" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url() ."/js/jquery-2.2.3.min.js";?>"></script>
    <script src="<?php echo base_url() ."/js/script.js";?>"></script>
    <title>Task Manager Search</title>
</head>

<body>

    
          <p> <?php  echo "<a href='".site_url('login/loggedout')."'><button class='exit-btn exit-btn-4'>Logout</button></a>" ?> </p>
            
                    <h1>Welcome <?php echo $this->session->userdata('username');
        
                    ?>
                    </h1>
                     
<div id="box1">	
		   
		      <!-- This shows the search form -->
		     
		         <div id="form">

		    <form action="" method="post">
		    <label for="search">Search Task</label>
		    <input placeholder="eg: Task Name, Due Date" name="search" id="search">
		    <input id= "submit"type="submit" value="Search">
		    </form>
		    </div>
                         


<?php
/*gains access to database*/
    require_once("config.inc.php");

    
/*search box code (enter a search term or results won't display)*/
if(isset($_POST['search']))
{
	$search_term = $_POST['search'];
	echo "<p> Results for '$search_term'</p>";
	if ($search_term =="")
	{
	    /*without typing in the search term a message will appear (please enter your search term*/
	    echo "Please Enter Your Search Term";
	}else
    {
	
/*Selects the data from the tasks table were it displays the Task and Due Date*/
$query = "SELECT * FROM tasks WHERE user_id =:user_id";
$stmt = $conn->prepare("SELECT * FROM tasks WHERE task_name LIKE :search_term or due_date LIKE :search_term");
$stmt->bindValue(':search_term','%'.$search_term.'%');
$stmt->execute();

/*the count starts from 0 and when the while loop goes around it collects how many tasks and Due dates have shown*/
$counter = 0;
ob_start();
while ($tasks=$stmt->fetch(PDO::FETCH_OBJ))
{
    //displays details of the tasks// /*this code loops around and collects the data from the details page*/
    echo "<p>";
    echo "<a href='search.php?user_id=".$tasks->user_id."'>";
    echo $tasks->task_name;
    echo "</a>";
    echo "</p>";
    
      $counter++;
}

 /*counts how many results have shown*/

	
}
/*displays the results at the top*/
$out2 = ob_get_contents();
ob_end_clean();

ob_start();
echo $counter;
echo " Results found ";

$out1 = ob_get_contents();
ob_end_clean();

echo $out1, $out2;

    }




$conn=NULL;
?>

<br>
<p>
<?php
echo "<a href='" . base_url() . "index.php/login/home'>Back To Home Page</a>"; // link to go to the Homepage
?>
</p>


</div>