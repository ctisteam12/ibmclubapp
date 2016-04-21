<!--

	Bu CONTROLLER'DA Admin sayfalarında ki Event İşlemlerini yapıyoruz!
	@baristellioglu
-->


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Load database models
		$this->load->model('event');		
	}

	// Yeni Etkinlik Oluştur sayfasına gider!
	public function create_event(){
		if($this->session->userdata('admin'))
			$this->load->view('pages/admin/create_event');
		else
			redirect('pages/admin_login');
	}
	// Etkinlikleri düzenleme sayfasına gider!
	public function edit_event(){
		if($this->session->userdata('admin'))
			$this->load->view('pages/admin/edit_event');
		else
			redirect('pages/admin_login');
	}

	// Etkinlikleri tabloda gösterir!
	public function event_list(){
		$result = $this->event->search();
		$data['events'] = $result['rows'];

		if($this->session->userdata('admin'))
			$this->load->view('pages/admin/event_list', $data);
		else
			redirect('pages/admin_login');
	}

	// Etkinliği iptal eder (Siler)! 
	public function cancel_event(){
		$id = $_GET['id'];
		$result = $this->event->cancelevent($id);
		if($result == TRUE){

			redirect('events/event_list');
		}
		else
			echo "GG";
	}

	// Yeni bir Etkinlik Oluşturur!
	public function new_create_event(){
		
		$data = array(
			'event_name' => $this->input->post('event_name'),
			'event_date' => $this->input->post('event_date'),
			'event_place' => $this->input->post('event_place'),
			'event_quota' => $this->input->post('event_kota'),
			'event_point' => $this->input->post('event_point'),
			'event_description' => $this->input->post('event_description')
			);
		// Members Modeline gönderiyorum!
		$result = $this->event->event_create($data);
		if($result){
			redirect('events/event_list');
		}

	}

	
}