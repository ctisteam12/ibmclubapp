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




}




?>

<!--  $condition = "email ='" . $data['email'] . "' AND password ='" . $data['password'] . "'";
   $this->db->select('*');
   $this->db->from('member');
   $this->db->where($condition);
   $this->db->limit(1);
   $query = $this->db->get();
   if ($query->num_rows() == 1) {
    return $query->row(0);
  } 
  return null;

-->
