<?php
Class Members extends CI_Model {

  public function checkdatabase($email, $password){

    $condition = "email ='" . $email . "' AND password ='" . $password . "'";
    $this-> db ->select('*');
    $this-> db ->from('member');
    $this-> db ->where($condition);
    $this-> db ->limit(1);

    $query = $this-> db ->get();

    if($query->num_rows() > 0){

      return $query->result();

    }else{
      return 0;
    }
  }

  public function create_member($data){

    $this->db->set('name',$data['member_name']);
    $this->db->set('surname',$data['member_surname']);
    $this->db->set('email',$data['member_email']);
    $this->db->set('password',$data['member_password']);
    $res=$this->db->insert('member');
    return $res;

  }

  public function wait_for_approval($data){

    $this->db->set('member_name',$data['member_name']);
    $this->db->set('member_surname',$data['member_surname']);
    $this->db->set('member_email',$data['member_email']);
    $this->db->set('member_password',$data['member_password']);
    $res=$this->db->insert('wait_for_approval');
    return $res;
  }

  //Pages sayfasında session'a pointi atmak için kullanıyoruz!
  public function takepoint($id){

    $query = $this->db->select('*')
    ->from('member_point')
    ->where('member_id',$id);

    $query = $this->db->get();

    $res = $query->result();


    return $res;
  }

  public function insert_file($filename,$id){

    $data = array(

      'image' => $filename

      );
    $query =$this->db->where('id', $id)
    ->update('member', $data);

    if($query){

      return TRUE;
    }
  }

  public function findMember($member_id){

    $query = $this->db->select('*')
    ->from('member')
    ->where('id',$member_id);

    $query = $this->db->get();
    $ret['rows'] = $query->result();

    return $ret;

  }
}
?>

