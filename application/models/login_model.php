<?php
class Login_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	// get the arrays of uesrs table
	public function get_user()
	{
		$query = $this->db->get('users');
		return $query->result_array();
	}
}