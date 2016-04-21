<!--
Bu CONTROLLER'DA Admin Login oldutan sonraki Member işlemlerini yapıyoruz!
@baristellioglu

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
		if($this->session->userdata('admin'))
			$this->load->view('pages/admin/dashboard');
		else
			redirect('pages/admin_login');
	}
// Yeni Üye Oluştur sayfasına gider!
	public function create_member(){
		if($this->session->userdata('admin'))
			$this->load->view('pages/admin/create_member');
		else
			redirect('pages/admin_login');
	}

	public function edit_member(){
		$id = $_GET['id'];
		$result = $this->admin_model->find_member($id);
		$data['members'] = $result['rows'];
		$data['total_point'] = $result['total'];

	/*
			Edit member için yapılacaklar;
			3- değiştirilen değerleri al update_member function'ı ile update işlemini yap!.
	*/
			if($this->session->userdata('admin'))
				$this->load->view('pages/admin/edit_member', $data);
			else
				redirect('pages/admin_login');
		}
// Üyeleri tabloda Gösterir!
		public function member_list(){
			$result = $this->admin_model->show_members();
			$data['members'] = $result['rows'];
			if($this->session->userdata('admin'))
				$this->load->view('pages/admin/member_list', $data);
			else
				redirect('pages/admin_login');
		}
// Onay Bekleyen Hesapları tablo'ya basıyor
		public function approval_show(){

			$limit = 20;
			$offset = 0;
			$results = $this->admin_model->show_approvals($limit, $offset);
			$data['approvals'] = $results['rows'];
			$data['num_rows'] = $results['num_rows'];

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
					$surname = $approval->member_surmame;
					$email = $approval->member_email;
					$password =$approval->member_password;
				}

				$this->email->from("ibmclubapp@gmail.com", "IBM CLUP APP");
				$this->email->to($email);
				$this->email->subject("Üyelik Başvuru Onayı");
				$this->email->message('Sayın '.$surname.' '.$surname.'
					Üyelik Başvurunuz Kabul edilmiştir.
					Aşağıdaki üyelik bilgilerinizi kullanarak sisteme giris yapabilirsiniz.
					Email: '. $email.'
					Şifre: '. $password.'
					IBM CLUB APP : http://localhost/ibmclub
					');

				$send = $this->email->send();

				if($send){

					redirect('admin/approval_show');
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

				redirect('admin/member_list');
			}
			else
				echo GG;
		}
// Puan Ekleme ekranını gösteriyor, aynı zamanda member ve puan bilgilerini database'den çekiyor!
		public function point_screen(){

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

			redirect('admin/member_list');
		}

// Admin tarafından isteği iptal etme işlemi yapılıyor
		public function cancel_request(){

			$id = $_GET['id'];
			$result = $this->admin_model->cancelrequest($id);

			if($result == TRUE){

				redirect('admin/approval_show');
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

				redirect('admin/member_list');
			}
			else
				echo "GG";
		}

		public function showmemberevents(){
			$member_id = $_GET['id'];

		}
	}
	?>