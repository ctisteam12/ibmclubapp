<?php
Class Event extends CI_Model
{
 function event_create($data)
 {

   $this->db->set('event_name',$data['event_name']);
   $this->db->set('event_date',$data['event_date']);
   $this->db->set('event_place',$data['event_place']);
   $this->db->set('event_quota',$data['event_quota']);
   $this->db->set('event_point',$data['event_point']);
   $this->db->set('event_description',$data['event_description']);
   $res=$this->db->insert('event');
   return $res;
 }
}
?>