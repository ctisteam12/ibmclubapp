<?php
Class Members extends CI_Model {

  public function checkdatabase($email, $password){

    $condition = "email ='" . $email . "' AND password ='" . $password . "'";
    $this-> db ->select('*');
    $this-> db ->from('member');
    $this-> db ->where($condition);
    $this-> db ->limit(1);

    $query = $this-> db ->get();

    if($query->num_rows() > 0){

      return $query->result();

    }else{
      return 0;
    }
  }

  public function create_member($data){

    $this->db->set('name',$data['member_name']);
    $this->db->set('surname',$data['member_surname']);
    $this->db->set('email',$data['member_email']);
    $this->db->set('password',$data['member_password']);
    $res=$this->db->insert('member');
    return $res;

  }

  public function wait_for_approval($data){

    $this->db->set('member_name',$data['member_name']);
    $this->db->set('member_surname',$data['member_surname']);
    $this->db->set('member_email',$data['member_email']);
    $this->db->set('member_password',$data['member_password']);
    $res=$this->db->insert('wait_for_approval');
    return $res;
  }

  // Total Point Hesaplama 
  public function gettotalpoint($member_id){
    $point1 = 0;
    $point2 = 0;
    $total=0;
    $sql = "select coalesce(sum(m.member_point),0) as p1 from member_point m where m.member_id =".$member_id;
    $query = $this->db->query($sql);
    $pointa = $query->result();
    foreach ($pointa as $value) {
       $point1 = $value->p1;
     } 
    $sql2 = "select coalesce(sum(e.event_point),0) as p2 from events e, participants p where e.event_id = p.event_id
    and p.member_id = $member_id";
    $query = $this->db->query($sql2);
    $pointb  = $query->result();
    foreach ($pointb as $value) {
      $point2  = $value->p2;
    }
    $total = $point1 - $point2;
    return $total;

  }

  public function findMember($member_id){

    $query = $this->db->select('*')
    ->from('member')
    ->where('id',$member_id);

    $query = $this->db->get();
    $ret['rows'] = $query->result();

    return $ret;

  }

  public function attend($data){
    // $data array'i içindekileri participants table içine atıyoruz.
    $this->db->set('member_id',$data['member_id']);
    $this->db->set('event_id',$data['event_id']);
    $this->db->set('friendname1',$data['name1']);
    $this->db->set('friendsurname1',$data['surname1']);
    $this->db->set('friendemail1',$data['email1']);
    $this->db->set('friendtype1',$data['type1']);
    $this->db->set('friendname2',$data['name2']);
    $this->db->set('friendsurname2',$data['surname2']);
    $this->db->set('friendemail2',$data['email2']);
    $this->db->set('friendtype2',$data['type2']);
    $this->db->set('friendname3',$data['name3']);
    $this->db->set('friendsurname3',$data['surname3']);
    $this->db->set('friendemail3',$data['email3']);
    $this->db->set('friendtype3',$data['type3']);
    $this->db->set('total',$data['total']);
    $res=$this->db->insert('participants');
    // Member'in katıldığı etkinliğin bilgilerini alıyoruz.
    $query = $this->db->select('*')
    ->from('participants')
    ->where('member_id',$data['member_id'])
    ->where('event_id',$data['event_id']);
    $query = $this->db->get();
    $ret['rows'] =$query->result();
    if($res && $query){
      return $ret;
    }
    else
      return FALSE;
  }

  public function cancel_events($event_id, $member_id){

    $query = $this->db->where('event_id', $event_id)
    ->where('member_id', $member_id)
    ->delete('participants');

    if($query){

      return TRUE;
    }
    else
      return FALSE;
  }
}
?>