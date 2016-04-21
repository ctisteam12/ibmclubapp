  <?php
  Class Event extends CI_Model
  {

   public function event_create($data)
   {
    $date = date('Y-m-d', strtotime($data['event_date']));
    $this->db->set('event_name',$data['event_name']);
    $this->db->set('event_date',$date);
    $this->db->set('event_place',$data['event_place']);
    $this->db->set('event_quota',$data['event_quota']);
    $this->db->set('event_point',$data['event_point']);
    $this->db->set('event_description',$data['event_description']);
    $res=$this->db->insert('events');
    return $res;
  }

   // EVENTLERİ TABLO'DA GÖSTERMEK İÇİN Member için
  public function search($member_id){
   	//Result query
    // Zamanı data_time olarak alıyorum.
    $date = "'".date('Y-m-d', time())."'";
   /* $sql = "SELECT *,(event_quota - coalesce((SELECT SUM(total) FROM participants WHERE participants.event_id=e.event_id),0)) 
   AS available_quota FROM events e where e.event_date >=".$date; */
   $sql = "SELECT *,(event_quota - coalesce((SELECT SUM(total) FROM participants WHERE participants.event_id=e.event_id),0))
   AS available_quota FROM events e where e.event_date >=".$date."AND
   e.event_id NOT IN (select p.event_id from participants p where p.member_id =".$member_id.")";

   $query = $this->db->query($sql);
   $ret['rows'] = $query->result();
   return $ret;
 }
  // Event sayısı
  public function number_of_event(){
   $query = $this->db->select('COUNT(*) as count', FALSE)
   ->from('events');

   $query = $this->db->get();

   $temp = $query->result();

   $ret['num_rows'] = $temp[0]->count;

   return $ret;

 }

 // Bugunkü etkinlikler
 public function todays_events(){
  $date = "'".date('Y-m-d', time())."'";
  $sql = "select * from events e where e.event_date=".$date;
  $query = $this->db->query($sql);
  $ret['rows'] = $query->result();
  return $ret;
 }

  // EVENTLERİ TABLO'DA GÖSTERMEK İÇİN ADMIN İÇİN
 public function search_events(){
    //Result query
    // Zamanı data_time olarak alıyorum.
  $date = "'".date('Y-m-d', time())."'";
  $sql = "SELECT *,(event_quota - coalesce((SELECT SUM(total) FROM participants WHERE participants.event_id=e.event_id),0)) 
  AS available_quota FROM events e where e.event_date >=".$date;
  $query = $this->db->query($sql);
  $ret['rows'] = $query->result();
  return $ret;
}


  // Event'i iptal ediyoruz! (Siliyoruz)
public function cancelevent($id){

  $query1 = $this->db->where('event_id',$id)
  ->delete('participants');

  $query = $this->db->where('event_id', $id)
  ->delete('events');

  if($query && $query1){
    return TRUE;
  }
  else
    return FALSE;
}
  // Eventlist'ten seçtiğimiz event'in bilgilerini getiriyoruz.
public function findEvent($id){
  $sql = "SELECT *,(event_quota - coalesce((SELECT SUM(total) FROM participants WHERE participants.event_id=e.event_id),0)) 
  AS available_quota FROM events e where e.event_id =".$id;

  $query = $this->db->query($sql);

  $ret['rows'] = $query->result();
  return $ret;
}
  // Member'ın katıldığı etkinlikleri çağırıyoruz.
public function show_member_events($member_id){

 $sql = "SELECT *,(event_quota - coalesce((SELECT SUM(total) FROM participants WHERE p.event_id=e.event_id),0)) AS available_quota FROM events e, participants p WHERE e.event_id= p.event_id AND p.member_id=".$member_id;
 $query = $this->db->query($sql);
 $num_rows = $query->num_rows();
 $ret['rows'] = $query -> result();
 $ret['number_rows'] = $num_rows;
 $query= $this->db->select('name, surname')
 ->from('member')
 ->where('id',$member_id);
 $query = $this->db->get();
 $ret['names'] = $query->result();

 return $ret;
}
 // event update işlemi yapılıyor.
public function update($event_id,$name,$date,$place,$quota,$point,$description){

 $data = array(
  'event_name' => $name,
  'event_date' => $date,
  'event_place' => $place,
  'event_quota' => $quota,
  'event_point' => $point,
  'event_description' => $description
  );

 $query = $this->db->where('event_id', $event_id)
 ->update('events', $data);

 if($query){
  return TRUE;
}
else
  return FALSE;
}
// Seçilen event'e katılan kişileri göstermek için kullanıyoruz.
public function show_event_participants($event_id){

  $sql = "SELECT id, name, surname, email, total FROM participants p, member m WHERE p.member_id = m.id AND p.event_id=".$event_id;
  $query = $this->db->query($sql);
  $ret['rows'] = $query->result();
  $query = $this->db->select('event_id ,event_name')
  ->from('events')
  ->where('event_id', $event_id);
  $query = $this->db->get();
  $ret['names'] = $query->result();

  return $ret;
}

public function get_member_friends($event_id, $member_id){

  $sql = "SELECT name,surname,friendname1,friendname2,friendname3,friendsurname1,friendsurname2,friendsurname3,
 friendemail1,friendemail2,friendemail3,friendtype1, friendtype2,friendtype3 FROM
 participants p, member m WHERE p.member_id=".$member_id."AND p.event_id=".$event_id; 

 $query = $this->db->query($sql);
 $ret['rows'] = $query->result();

 return $ret;
}



}
?>

  <!--  -->