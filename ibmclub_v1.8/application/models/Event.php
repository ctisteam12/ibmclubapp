  <?php
  Class Event extends CI_Model
  {

   public function event_create($data)
   {

     $this->db->set('event_name',$data['event_name']);
     $this->db->set('event_date',$data['event_date']);
     $this->db->set('event_place',$data['event_place']);
     $this->db->set('event_quota',$data['event_quota']);
     $this->db->set('event_point',$data['event_point']);
     $this->db->set('event_description',$data['event_description']);
     $res=$this->db->insert('events');
     return $res;
   }

   // EVENTLERİ TABLO'DA GÖSTERMEK İÇİN
   public function search(){
   	//Result query
    // Zamanı data_time olarak alıyorum.
    $sql = "SELECT *,(event_quota - coalesce((SELECT SUM(total) FROM participants WHERE participants.event_id=events.event_id),0)) AS available_quota FROM events";
    $query = $this->db->query($sql);
    $ret['rows'] = $query->result();


    
    return $ret;
  }
  // Event'i iptal ediyoruz! (Siliyoruz)
  public function cancelevent($id){

    $query = $this->db->where('event_id', $id)
    ->delete('events');

    if($query){
      return TRUE;
    }
    else
      return FALSE;
  }
  // Eventlist'ten seçtiğimiz event'in bilgilerini getiriyoruz.
  public function findEvent($id){
    $query = $this->db->select('*')
    ->from('events')
    ->where('event_id', $id);

    $query = $this->db->get();

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
   

   return $ret;
 }



}
?>

  <!--  -->