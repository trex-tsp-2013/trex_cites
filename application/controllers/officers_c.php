<?php

class Officers_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('form_model');
	}

	public function index()
	{
		
		if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			$this->load->view('officers/home',$data);
		} else{
		 	redirect('auth', 'refresh');
		}


		// $this->load->view('officers/home');
	}

	public function about()
	{
		$this->load->view('pages/about');
	}

	public function update_stat15(){

		if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		{
			$array = array('status' => $this->input->post('stat'));
			$id =array('form15_Id' => $this->input->post('form15_Id'));
			$this->form_model->update_stat_form15($id,$array);
			
			$user = $this->ion_auth->user()->row();
				//save username to be data
			$data['username'] = $user->username;
			$data['form15'] = $this->form_model->get_form15();
			//open quqery form15
			$this->load->view('officers/list15',$data);
		}
		else{
			redirect('auth', 'refresh');
		}

	}
	


	public function list15()
	{


		if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//load db table form15
			$data['form15'] = $this->form_model->get_form15();
			//open quqery form15
			$this->load->view('officers/list15',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
		
	}
	public function show15($formId)
	{
		if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save from to data
			$data['form15'] = $this->form_model->get_form15($formId);
			if (empty($data['form15'])){
				show_404();
			}
			$this->load->view('officers/show15', $data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	

}