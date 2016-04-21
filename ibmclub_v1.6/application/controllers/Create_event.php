<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_event extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		// Load form helper library
		$this->load->helper('form');
		// Load database
		$this->load->model('event');

	}
	public function create_event()
	{
		$data = array (
			'event_name' => $this->input->post('event_name'),
			'event_date' => $this->input->post('event_date'),
			'event_place' => $this->input->post('event_place'),
			'event_quota' => $this->input->post('event_quota'),
			'event_point' => $this->input->post('event_point'),
			'event_description' => $this->input->post('event_description'),
		);
		// MODEL'E GONDERİYORUZ!
		$result = $this->event->event_create($data);
		//echo "res: ".$result;
		echo  "Database Eklendi!";
	}
}
?>