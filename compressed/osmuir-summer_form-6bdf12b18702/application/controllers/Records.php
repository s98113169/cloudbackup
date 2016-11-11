<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Records extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('records_model');
		$this->load->library('form_validation');

	}
	public function index()
	{
		if ($this->session->userdata('logged_in')) 
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['records'] = $this->records_model->getRecords();
			$this->load->view('records', $data);
		}
		else 
		{
			// If no session redirect to login page
			redirect('login', 'refresh');
		}
		
	}

	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('records', 'refresh');
	}

	public function insertRecords()
	{


		// $this->form_validation->set_rules('question1', '生產環境有哪些', 'required');
		$this->form_validation->set_rules('question2', '資料保護的預算', 'required');
		$this->form_validation->set_rules('question3', '備份與還原需求', 'required');
		$this->form_validation->set_rules('question4', '異地備份需求', 'required');
		$this->form_validation->set_rules('name', '姓名', 'required');
		$this->form_validation->set_rules('company_name', '公司名稱', 'required');
		$this->form_validation->set_rules('department', '部門', 'required');
		$this->form_validation->set_rules('employees', '公司規模', 'required');
		$this->form_validation->set_rules('title', '職稱', 'required');
		$this->form_validation->set_rules('telephone', '電話', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		$this->form_validation->set_message('required','{field} 必填');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('header');
			$this->load->view('welcome_message');
			$this->load->view('footer');
		} else {

			// Get multiple checkbox value
			
			$data = array(
				'question1' => json_encode($this->input->post('question1')),
				'question2' => $this->input->post('question2'),
				'question3' => $this->input->post('question3'),
				'question4' => $this->input->post('question4'),
				'question5' => $this->input->post('question5'),
				'name' => $this->input->post('name'),
				'company_name' => $this->input->post('company_name'),
				'department' => $this->input->post('department'),
				'employees' => $this->input->post('employees'),
				'title' => $this->input->post('title'),
				'telephone' => $this->input->post('telephone'),
				'email' => $this->input->post('email')
			);

			$this->records_model->insertRecords($data);

			redirect('thankyou','refresh');

		}

	}


}

/* End of file Records.php */
/* Location: ./application/controllers/Records.php */