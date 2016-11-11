<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Failed extends CI_Controller {

	public function index()
	{
		$this->load->view('header');		
		$this->load->view('failed');
		$this->load->view('footer');
	}

}

/* End of file Failed.php */
/* Location: ./application/controllers/Failed.php */