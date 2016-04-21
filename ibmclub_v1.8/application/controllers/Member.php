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

		$member_id = $this->session->userdata('user')['id'];
		//$result = $this->members->takepoint($id);
		$result = $this->members->gettotalpoint($member_id);

		$user_data = $this->session->userdata('user');
		$user_data['point'] = $result;
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
		$member_id = $this->session->userdata('user')['id'];
		$query = $this->event->show_member_events($member_id);
		$data['number_rows'] = $query['number_rows'];
		if($this->session->userdata('user')){

			$this->load->view('pages/member/my_profile',$data);
		}
		else
			redirect('pages/index');
	}
	// Member'ın katıldığı etkinlikleri gösterir!
	public function my_events(){
		// Session'dan member id aldık.
		$member_id = $this->session->userdata('user')['id'];
		// Member'ın katıldığı etkinlikleri çağırıyoruz.
		$query = $this->event->show_member_events($member_id);
		$data['events'] = $query['rows'];
		if($this->session->userdata('user'))
			$this->load->view('pages/member/my_events',$data);
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
		// $data'nın içine etkinlik id'sini de ekliyoruz ki attend_event sayfasında da kullanalım.
		$data['id'] = $id;
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
			//redirect('member/dashboard');
		}
		else{

			$this->load->view('pages/member/attend_event', $data);
		}

	}
	// Etkinlik katılma ekranı içerisinde ki katıl butonunun içinde çalışıyor
	public function attend(){
		// Event id alıyorum.
		$event_id = $_GET['id'];
		// User  id alıyorum
		$member_id = $this->session->userdata('user')['id'];
		$member_point = $this->session->userdata('user')['point'];
		// Katılımcı 1 bilgileri
		$name1 = $this->input->post('friendname1');
		$surname1 = $this->input->post('friendsurname1');
		$email1 = $this->input->post('friendemail1');
		$type1 = $this->input->post('friendyakinlik1');
		// Katılımcı 2 Bilgileri
		$name2 = $this->input->post('friendname2');
		$surname2 = $this->input->post('friendsurname2');
		$email2 = $this->input->post('friendemail2');
		$type2 = $this->input->post('friendyakinlik2');
		// Katılımcı 3 Bilgileri
		$name3 = $this->input->post('friendname3');
		$surname3 = $this->input->post('friendsurname3');
		$email3 = $this->input->post('friendemail3');
		$type3 = $this->input->post('friendyakinlik3');
		// Member'ın kendisi 1;
		$sayi = 1;
		if($name1 == ""){
			$sayi=1;
		}
		else if($name2 == ""){
			$sayi = 2;
		}
		else if($name3 == ""){
			$sayi = 3;
		}
		else{
			$sayi=4;
		}
		// Bilgileri array'e atıyoruz ve Participants table'ına ekliyoruz!!
		$data = array(
			'member_id' => $member_id,
			'event_id' => $event_id,
			'name1' => $name1,
			'name2' => $name2,
			'name3' => $name3,
			'surname1' => $surname1,
			'surname2' => $surname2,
			'surname3' => $surname3,
			'email1' => $email1,
			'email2' => $email2,
			'email3' => $email3,
			'type1' => $type1,
			'type2' => $type2,
			'type3' => $type3,
			'total' => $sayi,
			);
		$query3 = $this->members->attend($data);
		if($query3 == FALSE){
			echo "GG WP";
		}
		else{
		// Member bilgilerini çektik.
			$data['participants'] = $query3['rows'];
			$query1 = $this->members->findMember($member_id);
			$data['members'] = $query1['rows'];
		// Etkinlik Bilgilerini çektik.
			$query = $this->event->findEvent($event_id);
			$data['events'] = $query['rows'];
			$data['sayi'] = $sayi;
			// ********************** SIKINTILI ******************
			foreach ($data['events'] as $value) {
				$event_point = $value->event_point;
			}
			$new_point = $member_point - $event_point;

			$user_data = $this->session->userdata('user');
			$user_data['point'] = $new_point;
			$this->session->set_userdata('user', $user_data);
			// ********************** SIKINTILI *******************

			//$query4 = $this->members->quotaupdate($new_quota, $event_id, $event_quota, $member_id, $data);
			$this->load->view('pages/member/attend_result', $data);
			
		}
		/*

			****Yapılacaklar listesi*****
			Aynı zamanda katıldığım etkinlikler(my_events) sayfasında gösterilecek.
		
		*/
		}
	}
	?>
