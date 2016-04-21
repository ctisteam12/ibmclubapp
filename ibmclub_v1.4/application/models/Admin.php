<?php
Class Admin extends CI_Model {

  function checkdatabase($email, $password){

    $condition = "email ='" . $email . "' AND password ='" . $password . "'";
    $this-> db ->select('*');
    $this-> db ->from('admin');
    $this-> db ->where($condition);
    $this-> db ->limit(1);

    $query = $this-> db ->get();

   if($query->num_rows() > 0){

    return $query->result();

  }else{
    return 0;
  }


}




}




?>