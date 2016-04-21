<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Load form helper library
		$this->load->helper('form');
		// Load database
		$this->load->model('event');
		$this->load->library('session');

	}

	public function index(){

		if($this->session->userdata('logged_in')){

			$session_data = $this-> session->userdata('logged_in');
			$data['name'] = $session_data['name'];
			$this->load->view('pages/member/member_dashboard', $data);

		}
		else{

			redirect('pages', 'refresh');
		}
	}

	public function member(){

		$this->load->view('pages/member/member_dashboard');
	}

	public function my_profile(){

		$this->load->view('pages/member/my_profile');
	}

	public function my_points(){

		$this->load->view('pages/member/my_points');
	}

	public function my_events(){

		$this->load->view('pages/member/my_events');
	}
}
?>