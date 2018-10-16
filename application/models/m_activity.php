<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_activity extends CI_Model {

	function data($number,$offset,$program_id){
        $this->db->where('program',$program_id);
        return $this->db->get('activity',$number,$offset)->result();       
    } 

    function daftar(){
    return $this->db->get('activity')->result();
}

    function jumlah_data(){
        return $this->db->get('activity')->num_rows();
    }

    public function simpan($data){
    	$this->db->insert('activity',$data);
    }

    public function hapus($id){
    	$this->db->where("id",$id);
    	$this->db->delete('activity');
    }

    public function edit($id){
    	$this->db->where("id",$id);
    	return $this->db->get('activity');
    }

    public function detail($id){
    return $this->db->query("select * from activity where id=".$id."");
}

    public function update($id,$data){
    	$this->db->where("id",$id);
    	$this->db->update('activity',$data);
    }

}

/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */