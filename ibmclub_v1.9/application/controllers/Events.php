<!--
	Bu CONTROLLER'DA Admin sayfalarında ki Event İşlemlerini yapıyoruz!
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
		$event_id = $_GET['id'];
		$result = $this->event->findEvent($event_id);
		$data['events'] = $result['rows'];
		if($this->session->userdata('admin'))
			$this->load->view('pages/admin/edit_event', $data);
		else
			redirect('pages/admin_login');
	}

	// Etkinlikleri tabloda gösterir!
	public function event_list(){
		$result = $this->event->search_events();
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

			echo "<script>alert('Etkinlik İptal Edildi')
				window.location='event_list';
				</script>";
			//redirect('events/event_list');
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
			echo "<script>alert('Yeni Etkinlik Oluşturuldu!')
				window.location='event_list';
				</script>";
			//redirect('events/event_list');
		}
	}
	// Edit event sayfasındaki Event update işlemini yapıyoruz.
	public function update_event(){
		$event_id = $_GET['id'];
		$name = $this->input->post('event_name');
		$date = $this->input->post('event_date');
		$place = $this->input->post('event_place');
		$quota = $this->input->post('event_quota');
		$point = $this->input->post('event_point');
		$description = $this->input->post('event_description');
		$result = $this->event->update($event_id,$name,$date,$place,$quota,$point,$description);
		if($result = TRUE){
			echo "<script>alert('Etkinlik Düzenlendi')
				window.location='event_list';
				</script>";
			//redirect('events/event_list');
		}
		else
			echo "GG";
	}
	// Etkinliklere katılanları gör sayfasını çağırıyoruz.
	public function show_participants(){
		$event_id = $_GET['id'];
		$result = $this->event->show_event_participants($event_id);
		$data['members'] = $result['rows'];
		$data['names'] = $result['names'];
		if($this->session->userdata('admin'))
			$this->load->view('pages/admin/event_participants', $data);
		else
			redirect('pages/admin_login');
	}

	public function show_participants_friend(){
		$member_id = $_GET['id'];
		$event_id = $this->session->userdata('event_id');
		$result = $this->event->get_member_friends($event_id, $member_id);
		$data['friends'] = $result['rows'];

		if($this->session->userdata('admin'))
			$this->load->view('pages/admin/member_friends', $data);
		else
			redirect('pages/admin_login');
	}
	
}