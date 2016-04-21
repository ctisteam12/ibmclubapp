<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Load Session
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');
	}

	public function file_view(){
		$this->load->view('pages/member/profile_update', array('error' => ' ' ));
	}

	public function do_upload(){
		$member_id = $this->session->userdata('user')['id'];
		$statu = $this->input->post('member_role');
		$config = array(
			'upload_path' => "./uploads/",
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			'overwrite' => TRUE,
			'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			'max_height' => "768",
			'max_width' => "1024"
			);
		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$upload_data = $this->upload->data();
			$data = array(
				'image' => $upload_data['file_name'],
				'role' => $statu,
				);
			$this->load->database();
			$query = $this->db->where('id', $member_id)
			->update('member', $data);

			redirect('member/my_profile');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('pages/member/profile_update', $error);
		}
	}




}