<?php
class Addtask extends CI_Controller

	{
	public function addTaskForm()
		{
		if ($this->session->userdata('is_logged_in') != "true")
			{
			redirect('login/index');
			}

		$userId = $this->session->userdata('userId'); // gets the userId from the session data
		$data['taskName'] = $this->input->post('taskName'); // gets the TaskName from the form
		$this->load->model("taskmodel"); // this loads the task  model
		$data['tasks'] = $this->taskmodel->getTask($userId); // activates the get task function in the task model:  when you pass through the userID you get all the task for that user
		$this->load->view("addtaskform", $data); // this loads the view addtaskform.php
                
		}

	public function insertTask()
		{
		$userId = $this->session->userdata('userId'); 
		$taskName = $this->input->post('taskName');
		$taskDesc = $this->input->post('taskDescription');
		$taskEnd = $this->input->post('taskEnd');
		$this->load->model("taskmodel");
		$data['tasks'] = $this->taskmodel->addTask($taskName, $taskDesc, $taskEnd, $userId); // activates the add task function in the task model: you can input data and it adds it to the database
		redirect('addtask/alltasks'); // this redirects you to all tasks 
                header("Refresh:0"); // refresh's the page automatically 
		}

         // View all Tasks       
	public function allTasks()
		{
		$userId = $this->session->userdata('userId');
		$this->load->model("taskmodel");
		$data['tasks'] = $this->taskmodel->getTask($userId);
		$this->load->view("viewalltasks", $data);
                
                
		}
        //Update Task Form 
	public function updateTaskForm()
		{
		$task_id = $this->uri->segment(3);
		$this->load->model("taskmodel");
		$data['task'] = $this->taskmodel->getSingleTask($task_id);
		$this->load->view("updatetaskform", $data);
                
                
		}

        // Update Task        
	public function updateTask()
		{
		$task_id = $this->input->post('taskId');
		$task_name = $this->input->post('taskName');
		$task_desc = $this->input->post('taskDescription');
		$due_date = $this->input->post('taskEnd');
		$task_progress = $this->input->post('taskProgress');
		$this->load->model("taskmodel");
		$this->taskmodel->updateTask($task_id, $task_name, $task_desc, $due_date, $task_progress);
		redirect('addtask/alltasks');
                header("Refresh:0");
		}
        // Delete Tasks
	public function deleteTask()
		{
		$task_id = $this->input->post('taskId');
		$this->load->model("taskmodel");
		$this->taskmodel->deleteTask($task_id);
		redirect('addtask/alltasks');
                header("Refresh:0");
		}
                
         // Filter Tasks      
	public function filter()
		{
                $userId = $this->session->userdata('userId');
		$selectFilter = $this->input->post('selectFilter');
		$this->load->model("taskmodel");
		$tasks = $this->taskmodel->getTask($userId);
                
                echo "<tr class='table-header'><td>Task Name</td><td>Task Description</td><td>Due Date</td><td>Create Date/Time</td><td>Task Progress</td></tr>";
                
                foreach($tasks as $task){
                    if($selectFilter=="noFilter"){ //if there is no filter (outputs all values)
                        echo "<tr>";
                        echo "<td><p><a href='" . base_url() . "index.php/addtask/updatetaskform/" . $task->id . "'> " . $task->task_name . "</a><br/></td>";
                        echo "<td>" . $task->task_description . "<br/></td>";
                        echo "<td> " . $task->due_date . "<br/></td>";
                        echo "<td>  " . $task->create_date . "<br/></td>";
                        echo "<td> " . $task->task_progress . "</p></td>";
                        echo "</tr>"; 
                    }else if($task->task_progress==$selectFilter){ // if task progress is the same as the users selected task progress, it outputs that value
                        echo "<tr>";
                        echo "<td><p><a href='" . base_url() . "index.php/addtask/updatetaskform/" . $task->id . "'> " . $task->task_name . "</a><br/></td>";
                        echo "<td>" . $task->task_description . "<br/></td>";
                        echo "<td> " . $task->due_date . "<br/></td>";
                        echo "<td>  " . $task->create_date . "<br/></td>";
                        echo "<td> " . $task->task_progress . "</p></td>";
                        echo "</tr>"; 
                    }
                }
                
                echo "</table>"; 
		}
}
                
?>