<!--
Bu CONTROLLER'DA Admin Login oldutan sonraki Member işlemlerini yapıyoruz!
-->

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
		$this->load->model('members');
	//Load Model
		$this->load->model('admin_model');

	}
// Admin Anasayfa'ya gider!
	public function  dashboard(){
		// ******* BURAYA YAPILACAK ******* 
		$result = $this->admin_model->show_approvals();
		$num['number'] = $result['num_rows'];

		$result = $this->admin_model->number_of_member();
		$num['number_of_member'] = $result['num_rows'];

		$result = $this->event->number_of_event();
		$num['number_of_event'] = $result['num_rows'];

		$result = $this->event->todays_events();
		$data['events'] = $result['rows'];



		$this->session->set_userdata($num);


		if($this->session->userdata('admin'))
			$this->load->view('pages/admin/dashboard',$data);
		else
			redirect('pages/admin_login');
	}
// Yeni Üye Oluştur sayfasına gider!
	public function create_member(){
		$result = $this->admin_model->show_approvals();
		$num['number'] = $result['num_rows'];
		$this->session->set_userdata($num);

		if($this->session->userdata('admin'))
			$this->load->view('pages/admin/create_member');
		else
			redirect('pages/admin_login');
	}
	// Edit member sayfasına member bilgilerini alıp getiriyor.
	public function edit_member(){

		$id = $_GET['id'];
		$result = $this->admin_model->find_member($id);
		$data['members'] = $result['rows'];
		$data['total_point'] = $result['total'];
		if($this->session->userdata('admin'))
			$this->load->view('pages/admin/edit_member', $data);
		else
			redirect('pages/admin_login');
	}
// Üyeleri tabloda Gösterir!
	public function member_list(){
		$result = $this->admin_model->show_approvals();
		$num['number'] = $result['num_rows'];
		$this->session->set_userdata($num);

		$result = $this->admin_model->show_members();
		$data['members'] = $result['rows'];
		if($this->session->userdata('admin'))
			$this->load->view('pages/admin/member_list', $data);
		else
			redirect('pages/admin_login');
	}
// Onay Bekleyen Hesapları tablo'ya basıyor
	public function approval_show(){

		$results = $this->admin_model->show_approvals();
		$data['approvals'] = $results['rows'];
		$num['number'] = $results['num_rows'];
		
		$this->session->set_userdata($num);

		if($this->session->userdata('admin'))
			$this->load->view('pages/admin/approval_page', $data);

		else
			redirect('pages/admin_login');
	}

// Admin Onaylama İşlemi Yapıyor!
	public function approve(){

		$id = $_GET['id'];

		$result = $this->admin_model->approval($id);

		if($result){
			$data['approvals'] = $result['informations'];

			foreach ($data['approvals'] as $approval) {
				$name = $approval->member_name;
				$surname = $approval->member_surname;
				$email = $approval->member_email;
				$password =$approval->member_password;
			}

			$this->email->set_newline("\r\n");
			$this->email->from("ibmclubapp@gmail.com", "IBM CLUP APP");
			$this->email->to($email);
			$this->email->subject("Üyelik Başvuru Onayı");
			$body = $this->load->view('pages/membership_mail',$data,TRUE);
			$this->email->message($body);
			$this->email->set_mailtype("html");
			$send = $this->email->send();


			if($send){

				//redirect('admin/approval_show');
				echo "<script>alert('Hesap Aktif Edildi!')
				window.location='approval_show';
				</script>";
			}
			else{

				echo "Mail Gönderilemedi";
			}
		}
		else 
			echo "PATLADI";
	}

// Admin member'ın kayıtlı olduğu tüm tablelardan member'i siler!
	public function deletemember(){

		$id = $_GET['id'];

		$result = $this->admin_model->delete($id);
		if($result == TRUE){

			//redirect('admin/member_list');
			echo "<script>alert('Üye Silindi!')
			window.location='member_list';
			</script>";
		}
		else
			echo GG;
	}
// Puan Ekleme ekranını gösteriyor, aynı zamanda member ve puan bilgilerini database'den çekiyor!
	public function point_screen(){
		$result = $this->admin_model->show_approvals();
		$num['number'] = $result['num_rows'];
		$this->session->set_userdata($num);

		$id = $_GET['id'];
		$result = $this->admin_model->find_member($id);
		$data['members'] = $result['rows'];
		$data['total_point'] = $result['total'];

		if($this->session->userdata('admin'))
			$this->load->view('pages/admin/point_screen', $data);

		else
			redirect('pages/admin');
	}
// Member'a puan ekleme işlemi yapılıyor. Bu function sonunda member_list sayfasına yönlendiriliyor.
	public function add_point(){
		$id = $this->input->get('id');
		$point = $this->input->post('member_point');
		$result = $this->admin_model->add_point_to_member($point, $id);
		$point_info['points'] = $result['rows'];

		//redirect('admin/member_list');
		echo "<script>alert('Puan Eklendi!')
		window.location='member_list';
		</script>";
	}

// Admin tarafından isteği iptal etme işlemi yapılıyor
	public function cancel_request(){

		$id = $_GET['id'];
		$result = $this->admin_model->cancelrequest($id);

		if($result == TRUE){

			//redirect('admin/approval_show');
			echo "<script>alert('Üyelik İstediği İptal Edildi!')
			window.location='approval_show';
			</script>";
		}
		else 
			echo "PATLADI";
	}
	public function update_member(){
		$id = $_GET['id'];
		$name = $this->input->post('member_name');
		$surname = $this->input->post('member_surname');
		$email = $this->input->post('member_email');
		$result = $this->admin_model->update($id,$name,$surname,$email);
		if($result = TRUE){

			//redirect('admin/member_list');
			echo "<script>alert('Üye Bilgileri Güncellendi!')
			window.location='member_list';
			</script>";
		}
		else
			echo "GG";
	}

	public function showmemberevents(){
		$result = $this->admin_model->show_approvals();
		$num['number'] = $result['num_rows'];
		$this->session->set_userdata($num);

		$member_id = $_GET['id'];
		$query = $this->event->show_member_events($member_id);
		$data['events'] = $query['rows'];
		$data['names'] = $query['names'];
		$data['member_id'] = $member_id;
		$this->load->view('pages/admin/member_events', $data);

	}

		// Etkinliğe katılan Yakınların Bilgileri
	public function show_member_friends(){
		$result = $this->admin_model->show_approvals();
		$num['number'] = $result['num_rows'];
		$this->session->set_userdata($num);
		
		$event_id = $_GET['event_id'];
		$member_id = $this->session->userdata('member_id');
		$result = $this->event->get_member_friends($event_id, $member_id);
		$data['friends'] = $result['rows'];

		if($this->session->userdata('admin'))
			$this->load->view('pages/admin/member_friends', $data);
		else
			redirect('pages/admin_login');
	}
}
?>