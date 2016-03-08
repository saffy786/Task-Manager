<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller {

	public function index()
	{
		$this->load->model('Task_Model');
		$data['tasks']=$this->Task_Model->getTasks();
		
		$this->load->view('tasks', $data);
	}
}
