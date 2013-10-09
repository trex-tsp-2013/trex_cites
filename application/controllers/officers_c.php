<?php

class Officers_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('form_model');
	}

	public function index()
	{
		// if ($this->ion_auth->logged_in() & $this->ion_auth->is_admin())
		// {
		// 	$user = $this->ion_auth->user()->row();
		// 	//save username to be data
		// 	$data['username'] = $user->username;
		// 	//open home page
		// 	$this->load->view('officers/home',$data);
		// } else{
		//  	redirect('auth', 'refresh');
		// }

		if ($this->ion_auth->logged_in())
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

	public function form15()
	{

		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open form15
			$this->load->view('pages/forms/form15',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}

		
	}
	public function preview15()
	{

		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open preview form15
			$this->load->view('pages/previews/preview15',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
		
	}
	public function save15()
	{

		if ($this->ion_auth->logged_in())
		{
			//load user
			$user = $this->ion_auth->user()->row();
			
			$data15 = array(
				//add userId form user
				'userId' => $user->id,
				'fname' => $this->input->post('fname'),
				'fbd' => $this->input->post('fbd'),
				'fnation' => $this->input->post('fnation'),
				'fpassport' => $this->input->post('fpassport'),
				'fissue' => $this->input->post('fissue'),
				'faddress' => $this->input->post('faddress'),
				'fstreet' => $this->input->post('fstreet'),
				'fprovince' => $this->input->post('fprovince'),
				'fzipcode'=> $this->input->post('fzipcode'),
				'ftel' => $this->input->post('ftel'),
				'ffax' => $this->input->post('ffax'),
				'fmail' => $this->input->post('fmail'),

				'fname2' => $this->input->post('fname2'),
				'fowner' => $this->input->post('fowner'),
				'faddress2' => $this->input->post('faddress2'),
				'fstreet2' => $this->input->post('fstreet2'),
				'fprovince2' => $this->input->post('fprovince2'),
				'fzipcode2' => $this->input->post('fzipcode2'),
				'ftel2' => $this->input->post('ftel2'),
				'fphone2' => $this->input->post('ffax2'),
				'ffax2' => $this->input->post('ffax2'),

				'flocation' => $this->input->post('flocation'),
				'faddress3' => $this->input->post('faddress3'),
				'fstreet3' => $this->input->post('fstreet3'),
				'fzipcode3' => $this->input->post('fzipcode3'),
				'ftel3' => $this->input->post('ftel3'),
				'fphone3' => $this->input->post('fphone3'),
				'ffax3' => $this->input->post('ffax3'),

				'plantname' => $this->input->post('plantname'),
				'sname' => $this->input->post('sname'),
				'numberbreed' => $this->input->post('numberbreed'),
				'numbercom' => $this->input->post('numbercom'),
				'source' => $this->input->post('source'),
				'ab' => $this->input->post('ab'),
				);



				if($this->form_model->save_form15($data15))
				{
					redirect('auth', 'refresh');
				}else{
					show_404();
				}


			// //open preview form15
			// $this->load->view('pages/previews/preview15');
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
		
	}



	

}