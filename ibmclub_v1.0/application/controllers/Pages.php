<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// Load form helper library
		$this->load->helper('form');
		// Load database
		$this->load->model('members');

	}


	public function view( $page = 'login')
	{

		if( ! file_exists('application/views/pages/'.$page.'.php')){

			show_404();
		}
		$this->load->view('pages/'.$page);
	}


	public function  dashboard(){
		error_log("dashboard function");

		$this->load->view('pages/dashboard');

	}

	public function  register(){

		$this->load->view('pages/register');

	}

	public function login(){
		$data = array(

			'member_id' => $this->input->post('member_id'),
			'password' => $this->input->post('password'),
			);
		$result = $this->members->login($data);
		if (!is_null($result)){
			$this->load->view('pages/dashboard');
			$error= false;
		}else{
			$this->load->view('pages/login');
			$error = true;

		}
	}

}
