<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}

}

/* End of file Question.php */
/* Location: ./application/controllers/Question.php */