<?php
Class Members extends CI_Model
{

  private $user_id;

 function login($data)
 {

  $condition = "email ='" . $data['email'] . "' AND password ='" . $data['password'] . "'";
   $this->db->select('*');
   $this->db->from('member');
   $this->db->where($condition);
   $this->db->limit(1);
   $query = $this->db->get();
   if ($query->num_rows() == 1) {
    return $query->row(0);
  } 
  return null;
  

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
