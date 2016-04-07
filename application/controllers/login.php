<?php
class Login extends CI_Controller

	{
	public function index()
		{
		$this->load->view("loginView");
		}

	public function validate_credentials()
		{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->load->model('client_model');
		$query = $this->client_model->validate();
		if ($this->form_validation->run() == FALSE) // no
			{
			$data['loginerrors'] = validation_errors();
			$this->load->view('loginView', $data);
			}
		  else
		if (!$query)
			{
			$data["errormessage"] = "username or password not correct";
			$this->load->view("loginView", $data);
			}
		  else
			{
			foreach($query as $user)
				{
				$userId = $user->id;
				}

			$data = array(
				'username' => $this->input->post('username') ,
				'userId' => $userId,
				'is_logged_in' => "true"
			);
			$this->session->set_userdata($data);
			redirect('login/home', 'refresh');
			}
		}

	public function home()
		{
		if (($this->session->userdata('username') != ''))
			{
			$userId = $this->session->userdata('userId');
			$this->load->model("taskmodel");
			$data['tasks'] = $this->taskmodel->getTask($userId);
			$this->load->view('main', $data);
			}
		  else
			{
			redirect('login/index');
			}
		}

	///register///

	public function insert()
		{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|valid_username|is_unique[users.username]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_lenght[5]|max_lenght[32]');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|matches[password]');
		if ($this->form_validation->run() == FALSE) // not validated
			{
			$data['regerrors'] = validation_errors();

			$this->load->view('loginView', $data);
			}
		  else
			{
			$this->load->model('client_model');
			$this->client_model->create_login();
			$data['account_created'] = 'Your account has been created.<br/><br/>You may now login.';
			$this->load->view('loginView', $data);
			}
		}

	public function check_if_username_exists($requested_username)
		{ 
		$this->load->model('client_model');
		$username_not_in_use = $this->client_model->check_if_username_exists($requested_username);
		if ($username_not_in_use)
			{
			return TRUE;
			}
		  else
			{
			return FALSE;
			}
		}

	public function loggedout()
		{
		$data = array(
			'username' => '',
			'is_logged_in',
			FALSE,
		);
		$this->session->unset_userdata($data);
		$this->session->sess_destroy();
		redirect('login/index');
		}
	}

?>
