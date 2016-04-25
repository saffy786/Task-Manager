<?php
class Login extends CI_Controller

	{
	public function index()
		{
		$this->load->view("loginView"); // this loads the loginview
		}
                
                
                public function search()
		{
		$this->load->view("search"); // this loads the search page
		}

                

	public function validate_credentials()
		{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required'); // form validation sets a rule for the username that its a required field
		$this->form_validation->set_rules('password', 'Password', 'trim|required'); // same for password
		$this->load->model('client_model');
		$query = $this->client_model->validate(); // this runs the validation
		if ($this->form_validation->run() == FALSE) // no
			{
			$data['loginerrors'] = validation_errors(); // this stores the validation errors
			$this->load->view('loginView', $data);
			}
		  else
		if (!$query)
			{
			$data["errormessage"] = "Username or Password not correct";
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
			); // this data is stored in session user data
			$this->session->set_userdata($data);
			redirect('login/home');
                        
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
			$data['account_created'] = '<p1>Your account has been created.<p1><br/><br/><p1/>You may now login.'; // when your account is created it displays a message saying "Your account has been created"
			$this->load->view('loginView', $data);
			}
		}

	public function check_if_username_exists($requested_username) // checks if the username already exists
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

	public function loggedout() // Log out Function
		{
		$data = array(
			'username' => '',
			'is_logged_in',
			FALSE,
		);
		$this->session->unset_userdata($data); //creates an array with empty values and overwrites the user data that already exits within the session 
		$this->session->sess_destroy(); // destroy session 
		redirect('login/index'); // redirects back to login 
		}
	}

?>
