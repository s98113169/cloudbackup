<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Records_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getRecords ()
	{
		$this->db->select('*');
		$this->db->from('records');
		$this->db->order_by('timestamp', 'desc');
		$query = $this->db->get();

		return $query->result();
	}

	public function insertRecords($data)
	{
		$this->db->insert('records', $data);
	}

}

/* End of file records_model.php */
/* Location: ./application/Models/records_model.php */