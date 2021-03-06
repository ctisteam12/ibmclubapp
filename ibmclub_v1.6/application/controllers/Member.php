<!-- 

Bu CONTROLLER'DA Member Login Olduktan sonraki işlemleri yapıyoruz! 
@baristellioglu

-->


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
	// Member Anasayfasını çağırır, ve etkinlik listesini gösterir!
	public function dashboard(){
		// Burada sayfa açılır açılmaz member pointi alıp session'a atıyoruz!
		$id = $this->session->userdata('user')['id'];
		$result = $this->members->takepoint($id);
		$tp=0;
		foreach($result as $row)
		{
			$tp += $row->member_point;
		}

		$user_data = $this->session->userdata('user');
		$user_data['point'] = $tp;
		$this->session->set_userdata('user', $user_data);
		// default olarak event display list geleceği için event display'i buraya yazdım. Sayfa açılır açılmaz buraya gelmeli.
		$results = $this->event->search();
		$data['events'] = $results['rows'];

		if($this->session->userdata('user'))
			$this->load->view('pages/member/member_dashboard', $data);

		else
			redirect('pages/index');
	}
	// Profilim sayfasını çağırır ve member'ın puanını çeker!
	public function my_profile(){
		if($this->session->userdata('user')){

			$this->load->view('pages/member/my_profile');
		}
		else
			redirect('pages/index');
	}
	// Member'ın katıldığı etkinlikleri gösterir!
	public function my_events(){
		if($this->session->userdata('user'))
			$this->load->view('pages/member/my_events');
		else
			redirect('pages/index');
	}
	// Yeni Member yaratır! Admin tarafında olması gerekiyor!
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
	// Profilimi düzenle sayfasını çağırır!
	public function edit_profile(){

		$this->load->view('pages/member/profile_update');
	}


	// Etkinliğe Katılma Ekranını Çağırıyoruz.

	public function attend_event(){
		// Etkinlik Bilgilerini Alıyoruz
		$id = $_GET['id'];
		$query = $this->event->findEvent($id);
		$data['events'] = $query['rows'];
		// Session Bilgilerini Alıyoruz
		$member_id = $this->session->userdata('user')['id'];
		$query1 = $this->members->findMember($member_id);
		$data['members'] = $query1['rows'];
		// Session'dan Member puanını alıyoruz.
		$member_point = $this->session->userdata('user')['point'];
		//Eventlerin bilgilerini alıyorum!
		foreach ($data['events'] as $value) {
			$event_point = $value->event_point;
			$event_quota = $value->event_quota;
		}

		if($event_quota == 0 ){
			
			echo "<script>alert('Kota Dolu!')</script>";
			return false;
		}
		else if($member_point < $event_point){
			echo "<script>
			alert('Puanınız Yetersiz!')
			</script>";
			header("Refresh: 3; url=\"http://localhost/ibmclub/member/dashboard\"");
		}
		else{

			$this->load->view('pages/member/attend_event', $data);
		}
	}

}
?>

<!-- 
// Profilimi düzenle sayfası içersindeki upload butonunun içinde çalışıyor
	public function do_upload(){


		$status = "";
		$msg = "";
		$filename = "image";

		if(empty($_POST['title'])){

			$status = "error";
			$msg = "Please Enter title";
		}

		$config['upload_path'] = 'pages\file';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 1024 * 8;
		$config['encrypt_name'] = true;

		//$this->upload->initialize($config);
		$this->load->library('upload', $config); 
		if($status != "error"){

			if(!$this->upload->do_upload($filename)){

				$status = "ERROR2";
				$msg = $this->upload->display_errors('','');
			}
			else{
				$id = $this->session->userdata('user')['id'];
				$data = $this->upload->data();
				$result = $this->members->insert_file($data['file_name'], $id);

				if($result){
					redirect('member/edit_profile');
				}
				else{

					unlink($data['full_path']);
					$status = "ERROR1";
					$msg = "tekrar dene";
				}

			}

			@unlink($_FILES[$filename]);
		}

		echo json_encode(array('status'=>$status, 'msg'=>$msg));
	}
-->