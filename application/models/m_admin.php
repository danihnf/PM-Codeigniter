<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	function data($number,$offset){
        return $query = $this->db->get('program',$number,$offset)->result();       
    }

    function daftar(){
        return $this->db->get('program')->result();       
    }
 
    function jumlah_data(){
        return $this->db->get('program')->num_rows();
    }

    public function simpan($data){
    	$this->db->insert('program',$data);
    }

    public function hapus($id){
    	$this->db->where("id",$id);
    	$this->db->delete('program');
    }

    public function edit($id){
    	$this->db->where("id",$id);
    	return $this->db->get('program');
    }

    public function update($id,$data){
    	$this->db->where("id",$id);
    	$this->db->update('program',$data);
    }

    public function detail($id){
        return $this->db->query("select * from program where id=".$id."");
    }

}

/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */