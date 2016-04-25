<?php
class TaskModel extends CI_Model

	{
	function __construct()
		{
		parent::__construct();
		}

	function getTask($userId)
		{ //Gets everything from database
		$this->db->select('*'); // selects all data in tasks table
		$this->db->from('tasks');
                $this->db->count_all();
                $this->db->order_by('due_date', 'asc'); // sets Ascending order by Due_date
		$this->db->where('user_id', $userId);
		$query = $this->db->get('');
		return $query->result();
		}

	function addtask($taskName, $taskDesc, $taskEnd, $userId)
		{
		$newTask = array(
			"task_name" => $taskName,
			"task_description" => $taskDesc,
			"due_date" => $taskEnd,
			"create_date" => date('Y-m-d H:i:s'), // displays the date and time
			"task_progress" => "Not Started",
			"user_id"=>$userId
		);
		return $this->db->insert('tasks', $newTask);
		}

	function getSingleTask($task_id) // This function gets a single task
		{ //Gets everything from database
		$this->db->select('*');
		$this->db->from('tasks');
		$this->db->where('id', $task_id);
		$query = $this->db->get('');
		return $query->result();
		}

	function updateTask($task_id, $task_name, $task_desc, $due_date, $task_progress) // update task
		{ //Gets everything from database
		$data = array(
			"task_name" => $task_name,
			"task_description" => $task_desc,
			"due_date" => $due_date,
			"task_progress" => $task_progress
		);
		$this->db->where('id', $task_id);
		$this->db->update('tasks', $data);
		}

	function deleteTask($task_id) //delete task
		{ //Gets everything from database
		$this->db->where('id', $task_id);
		$this->db->delete('tasks');
		}
	}

?>