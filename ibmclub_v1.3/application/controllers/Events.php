<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Load database models
		$this->load->model('event');
		
	}

	 public function display_event($offset=0){

		$limit= 20;
		
		$results = $this->event->search($limit, $offset);
		$data['events'] = $results['rows'];
		$data['num_rows'] = $results['num_rows'];
		$this->load->view('pages/member/member_dashboard', $data);
	}

	
}