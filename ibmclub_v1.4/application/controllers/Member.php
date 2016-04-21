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
		$this->load->model('members');
		// Load Session
		$this->load->library('session');

	}
	
	public function dashboard(){
		// default olarak event display list geleceği için event display'i buraya yazdım. Sayfa açılır açılmaz buraya gelmeli.
		$limit = 20;
		$offset = 0;
		$results = $this->event->search($limit, $offset);
		$data['events'] = $results['rows'];
		$data['num_rows'] = $results['num_rows'];

		if($this->session->userdata('user'))
			$this->load->view('pages/member/member_dashboard', $data);
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

	public function create_member(){

		$data = array(

			'member_name' => $this->input->post('member_name'),
			'member_surname' => $this->input->post('member_surname'),
			'member_email' => $this->input->post('member_email'),
			'member_password' => $this->input->post('member_password')
			);
		// Members Modeline gönderiyorum!
		$result = $this->members->create_member($data);
		
		
		$this->load->view('pages/admin/member_added');
		
	}
}
?>