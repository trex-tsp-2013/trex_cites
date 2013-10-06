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
			//open form15
			$this->load->view('pages/forms/form15');
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}

		
	}
	public function preview15()
	{

		if ($this->ion_auth->logged_in())
		{
			//open preview form15
			$this->load->view('pages/previews/preview15');
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
		
	}



	

}