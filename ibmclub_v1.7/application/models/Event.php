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
    $query = $this-> db ->select('*')
    ->from('events');

    $query = $this->db->get();

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




}
?>

  <!--  -->