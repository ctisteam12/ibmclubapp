<?php
Class Members extends CI_Model
{
 function login($data)
 {

   $condition = "member_id ='" . $data['member_id'] . "' AND member_password ='" . $data['password'] . "'";
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