<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	// MODELLERI BURADA CAĞIRIYORUZ
	public function __construct()
	{
		parent::__construct();
		// Load form helper library
		$this->load->helper('form');
		
		// Load Session Library
		$this->load->library('session');
		
		// Load Form Validation Library
		$this->load->library('form_validation');

		// Load database models
		$this->load->model('members');
		// Load database models
		$this->load->model('admin');

	}
	// URL KONTROLÜ YAPILIYOR(DEFAULT CONTROLLER BURASI)
	public function view( $page = 'index')
	{

		if( ! file_exists('application/views/pages/'.$page.'.php')){

			show_404();
		}
		if($this->session->userdata('user'))
			redirect('member/dashboard');
		else if($this->session->userdata('admin'))
			redirect('admin/dashboard');
		else
			$this->load->view('pages/'.$page);
			//$this->load->view('pages/index');

		
	}

	
	public function index (){
		if($this->session->userdata('user'))
			redirect('member/dashboard');
		else if($this->session->userdata('admin'))
			redirect('admin/dashboard');
		else
			$this->load->view('pages/index');

	}

	public function admin_login(){

		$this->load->view('pages/admin');
	}

	// LOGIN
	public function login(){
		// Type check ediyorum (User or Admin)
		$type = $this->input->get('type');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|alpha_numeric');

		if($this->form_validation->run() == false){

			$this->session->set_flashdata('error', 'Email yada Parolanızın formatını kontrol ediniz!');
			if($type == "user")
				redirect('pages/index');
			else if($type == "admin")
				redirect('pages/admin_login');

		}

		else
		{

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if($type == "user")
				$ret = $this->members->checkdatabase($email, $password);
			else if($type == "admin")
				$ret = $this->admin->checkdatabase($email, $password);
			

			if($ret!=0){

				$user_data = array();
				foreach($ret as $row)
				{
					$user_data = array(
						'id' => $row->id,
						'email' => $row->email,
						'name' => $row->name,
						'surname' => $row->surname
						);
					//if koy user or admin için session oluştur
					if($type=="user")
					$this->session->set_userdata('user', $user_data);
					else if ($type=="admin")
					$this->session->set_userdata('admin', $user_data);
				}

				redirect('member/dashboard');
			}
			else{
				$this->session->set_flashdata('error', 'Email yada Parola Hatalı!');
				if($type == "user")
				redirect('pages/index');
				else if($type == "admin")
				redirect('pages/admin_login');	
			}
		}
	}

	public function logout(){
		$type = $this->input->get('type');
		if($type=="user"){
			$this->session->sess_destroy('user');
			redirect('pages/index');
		}
		else if ($type=="admin"){
			$this->session->sess_destroy('admin');
			redirect('pages/admin_login');
		}

	}

	public function register(){

		$this -> load -> view('pages/register');
	}

}

