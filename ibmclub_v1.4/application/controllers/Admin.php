<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// Load form helper library
		$this->load->helper('form');
		// Load database
		$this->load->model('event');

	}

	public function  dashboard(){
		if($this->session->userdata('admin'))
		$this->load->view('pages/admin/dashboard');
	}

	public function create_event(){
		if($this->session->userdata('admin'))
		$this->load->view('pages/admin/create_event');
	}

	public function create_member(){
		if($this->session->userdata('admin'))
		$this->load->view('pages/admin/create_member');
	}

	public function delete_event(){
		if($this->session->userdata('admin'))
		$this->load->view('pages/admin/delete_event');

	}

	public function delete_member(){
		if($this->session->userdata('admin'))
		$this->load->view('pages/admin/delete_member');
	}

	public function edit_event(){
		if($this->session->userdata('admin'))
		$this->load->view('pages/admin/edit_event');
	}

	public function edit_member(){
		if($this->session->userdata('admin'))
		$this->load->view('pages/admin/edit_member');
	}

	public function event_list(){
		if($this->session->userdata('admin'))
		$this->load->view('pages/admin/event_list');
	}

	public function member_list(){
		if($this->session->userdata('admin'))
		$this->load->view('pages/admin/member_list');
	}

	public function approval(){
		if($this->session->userdata('admin'))
			$this->load->view('pages/admin/approval_page');


	}
	
}
?>