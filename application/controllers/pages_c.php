<?php

class Pages_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('login_model');
		
	}

	public function index()
	{

		if ($this->ion_auth->logged_in())
		{
			//redirect them to the login page
			$this->load->view('pages/home');
		} else{
		 	redirect('auth', 'refresh');
		}

		
	}

	public function form15()
	{

		if ($this->ion_auth->logged_in())
		{
			//redirect them to the login page
			$this->load->view('pages/form15');
		} else{
		 	redirect('auth', 'refresh');
		}

		
	}



	

}