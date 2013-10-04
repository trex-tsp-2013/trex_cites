<?php

class Pages extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function view($page = 'login')
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		/*$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);*/
		$this->load->view('templates/header');
		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer');
	}

	public function login()
	{


		$data['checker'] = $this->login_model->get_user();
		$data['title'] = 'checker';



		$username = $this->input->post("username");
		$password = $this->input->post("password");

		
		$bool = false;
		foreach ($data['checker'] as $check){
			if( $check['username'] == $username
				&& $check['password'] == $password){


				$this->load->view('pages/home');
				$bool = true;
			} 
		}

		if($bool == false){
			$this->load->view('templates/header');
			$this->load->view('pages/login_fail');
			$this->load->view('pages/login');
			$this->load->view('templates/footer');
			
		}



	}

}