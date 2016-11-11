<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifylogin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user','',TRUE);
	}

	public function index()
	{
		$this->load->library('form_validation');		

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			redirect('records', 'refresh');
		}
	}

	function check_database($password)
	{
		// Field validation succeeded. Validate againt database
		$username = $this->input->post('username');

		// query the database
		$result = $this->user->login($username, $password);

		if($result)
		{
			
			$array = array(
				'id' => $row->id,
				'username' => $row->username
			);
			
			$this->session->set_userdata('logged_in',  $array );
			return TRUE;
		}
		else 
		{
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}

}

/* End of file verifylogin.php */
/* Location: ./application/controller/verifylogin.php */