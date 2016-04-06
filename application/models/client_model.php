<?php
class Client_model extends CI_Model

	{

	//login//

	function validate()
		{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
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

	function check_if_username_exists($username)
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