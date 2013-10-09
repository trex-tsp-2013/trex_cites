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
	
	public function get_form15($slug = FALSE){
		if ($slug === FALSE){
			$query = $this->db->get('form15');
			return $query->result_array();
		}
		$query = $this->db->get_where('form15', array('form15_Id' => $slug));
		return $query->row_array();
	}
}