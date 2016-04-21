<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	private $user_id;


	function __construct()
	{
		parent::__construct();

		$this->user_id = 1;

		// Load form helper library
		$this->load->helper('form');
		// Load database models
		$this->load->model('members');
		$this->load->model('admin');
		// Load Session Library
		$this->load->library('session');

	}

	public function index (){

		$this->load->view('pages/index');

	}


	public function view( $page = 'index')
	{

		if( ! file_exists('application/views/pages/'.$page.'.php')){

			show_404();
		}
		$this->load->view('pages/'.$page);
	}


	public function  dashboard(){
		error_log("dashboard function");

		$this->load->view('pages/admin/dashboard');

	}

	public function  register(){

		$this->load->view('pages/register');

	}

	public function login(){
		$data = array(

			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			);
		$result = $this->members->login($data);
		
		if (!is_null($result)){
			$this->load->view('pages/member/member_dashboard');

			$error= false;
		}else{
			$this->load->view('pages/index');
			$error = true;

		}
	}

	public function admin_login(){
		$data = array(

			'email'  => $this->input->post('email'),
			'password' => $this->input->post('password'),
			);
		$result = $this->admin->login($data);
		if (!is_null($result)){
			$this->load->view('pages/admin/dashboard');
			$error= false;
		}else{
			$this->load->view('pages/admin');
			$error = true;

		}

	}



}


/* 	public function login(){
		$data = array(

			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			);
		$result = $this->members->login($data);
		
		if (!is_null($result)){
			$this->load->view('pages/member/member_dashboard');

			$error= false;
		}else{
			$this->load->view('pages/index');
			$error = true;

		}
	}
*/
