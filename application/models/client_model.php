<?php
class Client_model extends CI_Model

	{

	//login//

	function validate()
		{
		$this->db->select('*'); // this selects all data in users table
		$this->db->from('users'); // gets the information from users table 
		$this->db->where('username', $this->input->post('username')); 
		$this->db->where('password', md5($this->input->post('password'))); // adds md5 encryption in mysql database so you cannot see the password
		$query = $this->db->get('');
		return $query->result();
		}

	//registeration//

	function create_login()
		{
		$new_client_insert_data = array(
			'first_name' => $this->input->post('first_name') ,
			'last_name' => $this->input->post('last_name') ,
			'username' => $this->input->post('username') ,
			'email' => $this->input->post('email') ,
			'password' => md5($this->input->post('password'))
		);
		$insert = $this->db->insert('users', $new_client_insert_data);
		return $insert;
		}

	function check_if_username_exists($username) // checks if username exists in the database
		{
		$this->db->where('username', $username);
		$result = $this->db->get('users');
		if ($result->num_rows() > 0)
			{
			return FALSE; //username exists
			}
		  else
			{
			return TRUE; //username cannot be registered already existed
			}
		}
	}

?>