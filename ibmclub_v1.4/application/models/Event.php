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
 public function search($limit, $offset){

 	//Result query
  $query = $this-> db ->select('*')
  ->from('events')
  ->limit($limit, $offset);

  $query = $this->db->get();

  $ret['rows'] = $query->result();

  // Count query

  $query = $this->db->select('COUNT(*) as count', FALSE)
          ->from('events');

          $query = $this->db->get();

  $temp = $query->result();

  $ret['num_rows'] = $temp[0]->count;

  return $ret;
}

}
?>

<!--  -->