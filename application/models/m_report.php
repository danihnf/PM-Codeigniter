<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_report extends CI_Model {

    function data($id_activity){
       $this->db->where('activity',$id_activity);
   
       return $this->db->query("select * from report where parent_id='0'");
   }

   function jumlah_data(){
    return $this->db->get('report')->num_rows();
}

public function simpan($data){
    $this->db->insert('report',$data);
}

public function edit($id){
    $this->db->where("id",$id);
    return $this->db->get('report');
}

public function update($id,$data){
    $this->db->where("id",$id);
    $this->db->update('report',$data);
}

public function detail($id){
    return $this->db->query("select * from report where id=".$id."");
}

public function history($id){
    return $this->db->query("select * from report where parent_id=".$id." order by tgl ASC");
}

function join($id){
    return $this->db->query("select a.activity, p.program from activity a join program p on a.program = p.id where a.id = '$id'");
}
}

/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */