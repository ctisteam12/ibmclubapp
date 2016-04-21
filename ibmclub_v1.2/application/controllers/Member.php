<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	
	public function dashboard(){
		if($this->session->userdata('user'))
			$this->load->view('pages/member/member_dashboard');
		else
			redirect('pages/index');
	}

	public function my_profile(){
		if($this->session->userdata('user'))
			$this->load->view('pages/member/my_profile');
		else
			redirect('pages/index');
	}

	public function my_points(){
		if($this->session->userdata('user'))
			$this->load->view('pages/member/my_points');
		else
			redirect('pages/index');
	}

	public function my_events(){
		if($this->session->userdata('user'))
			$this->load->view('pages/member/my_events');
		else
			redirect('pages/index');
	}
}
?>