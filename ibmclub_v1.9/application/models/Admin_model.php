<?php
Class Admin_model extends CI_Model {

  // Login kısmında çalışıyor!
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

 //Onay Bekleyen Hesapları TABLO'DA GÖSTERMEK İÇİN
  public function show_approvals(){

  //Result query
    $query = $this-> db ->select('*')
    ->from('wait_for_approval');

    $query = $this->db->get();

    $ret['rows'] = $query->result();

  // Count query

    $query = $this->db->select('COUNT(*) as count', FALSE)
    ->from('wait_for_approval');

    $query = $this->db->get();

    $temp = $query->result();

    $ret['num_rows'] = $temp[0]->count;

    return $ret;
  }

  // Admin Onaylama Yapıyor, Onay bekleyenler tablosundan siliyor, Member table'ına ekliyor!
  public function approval($id){

    $query = $this->db->select('*')
    ->from('wait_for_approval')
    ->where('id', $id)
    ->limit(1);

    $query = $this->db->get();
    $data['informations'] = $query->result();


    foreach ($query->result() as $row)
    {
      $this->db->set('name',$row->member_name);
      $this->db->set('surname',$row->member_surname);
      $this->db->set('email',$row->member_email);
      $this->db->set('password',$row->member_password);
      $res=$this->db->insert('member');
    }

    $query1 = $this->db->where('id', $id)
    ->delete('wait_for_approval');

    if($res && $query1){

      return $data;
    }
    else
      return FALSE;
  }

  // Üye listesi sayfası için
  public function show_members(){

    //Result query
    $query = $this-> db ->select('*')
    ->from('member');

    $query = $this->db->get();

    $ret['rows'] = $query->result();

    return $ret;
  }

  // Üye sayısı
  public function number_of_member(){
   $query = $this->db->select('COUNT(*) as count', FALSE)
   ->from('member');

   $query = $this->db->get();

   $temp = $query->result();

   $ret['num_rows'] = $temp[0]->count;

   return $ret;

 }

  // Üye Lİstesi Sayfasında Silme işlemi için
 public function delete($id){
  $query2 = $this->db->where('member_id',$id)
  ->delete('participants');

  $query1 = $this->db->where('member_id', $id)
  ->delete('member_point');

  $query = $this->db->where('id', $id)
  ->delete('member');

  if($query1 && $query && $query2){

    return TRUE;
  }
  else
    return FALSE;
}

  // Üye Lİstesi Sayfasında Puan Ekleme işlemi için Member infolarını alıyorum
public function find_member($id){
    // Member tablosundan bilgileri alıyorum!
  $query = $this->db->select('*')
  ->from('member')
  ->where('id', $id);
  $query = $this->db->get();
  $ret['rows'] = $query->result();

  $sql = "select coalesce(sum(m.member_point),0) as p1 from member_point m where m.member_id =".$id;
  $query = $this->db->query($sql);
  $pointa = $query->result();
  foreach ($pointa as $value) {
   $point1 = $value->p1;
 } 
 $sql2 = "select coalesce(sum(e.event_point),0) as p2 from events e, participants p where e.event_id = p.event_id
 and p.member_id =".$id;
 $query = $this->db->query($sql2);
 $pointb  = $query->result();
 foreach ($pointb as $value) {
  $point2  = $value->p2;
}
$total = $point1 - $point2;
$ret['total'] = $total;
return $ret;
}

  // Member'a Puan Yüklüyoruz!
public function add_point_to_member($point, $id){

  $this->db->set('member_id',$id);
  $this->db->set('member_point', $point);
  $res=$this->db->insert('member_point');

  $query = $this->db->select('*')
  ->from('member_point')
  ->where('member_id', $id);
  $query = $this->db->get();

  $ret['rows'] = $query->result();
  return $ret;
}

  // Üyelik isteğini iptal ediyoruz!
public function cancelrequest($id){

  $query = $this->db->where('id', $id)
  ->delete('wait_for_approval');

  if($query){

    return TRUE;
  }
  else
    return FALSE;
}

  // Edit member işlemini yapıyoruz!
public function update($id,$name,$surname,$email){

  $data = array(

    'name' => $name,
    'surname' => $surname,
    'email' => $email
    );

  $query = $this->db->where('id', $id)
  ->update('member', $data);

  if($query){

    return TRUE;
  }
  else
    return FALSE;
}





}
?>