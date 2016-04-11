<?php
class Addtask extends CI_Controller

	{
	public function addTaskForm()
		{
		if ($this->session->userdata('is_logged_in') != "true")
			{
			redirect('login/index');
			}

		$userId = $this->session->userdata('userId');
		$data['taskName'] = $this->input->post('taskName');
		$this->load->model("taskmodel");
		$data['tasks'] = $this->taskmodel->getTask($userId);
		$this->load->view("addtaskform", $data);
                
		}

	public function insertTask()
		{
		$userId = $this->session->userdata('userId');
		$taskName = $this->input->post('taskName');
		$taskDesc = $this->input->post('taskDescription');
		$taskEnd = $this->input->post('taskEnd');
		$this->load->model("taskmodel");
		$data['tasks'] = $this->taskmodel->addTask($taskName, $taskDesc, $taskEnd, $userId);
		redirect('addtask/alltasks');
                header("Refresh:0");
		}

	public function allTasks()
		{
		$userId = $this->session->userdata('userId');
		$this->load->model("taskmodel");
		$data['tasks'] = $this->taskmodel->getTask($userId);
		$this->load->view("viewalltasks", $data);
                
                
		}

	public function updateTaskForm()
		{
		$task_id = $this->uri->segment(3);
		$this->load->model("taskmodel");
		$data['task'] = $this->taskmodel->getSingleTask($task_id);
		$this->load->view("updatetaskform", $data);
                
                
		}

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

	public function deleteTask()
		{
		$task_id = $this->input->post('taskId');
		$this->load->model("taskmodel");
		$this->taskmodel->deleteTask($task_id);
		redirect('addtask/alltasks');
                header("Refresh:0");
		}
}
                
?>