<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function save_form15($data)
	{
		$this->db->insert('form15', $data);
		return 'true';
	}
}