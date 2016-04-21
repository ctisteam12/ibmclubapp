<?php
Class Admin extends CI_Model
{
 function login($data)
 {

   $condition = "email ='" . $data['email'] . "' AND password ='" . $data['password'] . "'";
   $this->db->select('*');
   $this->db->from('admin');
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