<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_member extends CI_Model {

    function data($number,$offset){
        return $query = $this->db->get('member',$number,$offset)->result();       
    }

    function daftarmember(){
        return $this->db->get('member')->result();       
    }
 
    function jumlah_data(){
        return $this->db->get('member')->num_rows();
    }

    public function simpan($data){
        $this->db->insert('member',$data);
    }

    public function hapus($id){
        $this->db->where("id",$id);
        $this->db->delete('member');
    }

    public function edit($id){
        $this->db->where("id",$id);
        return $this->db->get('member');
    }

    public function update($id,$data){
        $this->db->where("id",$id);
        $this->db->update('member',$data);
    }

}

/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */