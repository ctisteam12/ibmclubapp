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

	
}
?>