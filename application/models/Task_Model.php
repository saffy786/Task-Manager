<?php

class Task_Model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	
	function getTasks(){
		$this->db->select('*');
		$this->db->from('tasks');
		$query = $this->db->get('');
		return $query->result();
	}
}
