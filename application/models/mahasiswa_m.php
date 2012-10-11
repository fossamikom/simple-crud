<?php

class Mahasiswa_m extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function insert($data){
        $this->db->insert('mahasiswa',$data);
    }

    function update($data){
        $this->db->where('nim',$data['nim']);
        $this->db->update('mahasiswa',$data);
    }

    function delete($id){
        $this->db->where('nim',$id);
        $this->db->delete('mahasiswa');
    }

    function get_all(){
        $query=$this->db->get('mahasiswa');
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return FALSE;
        }
    }

    function get_by_id($id){
        $this->db->where('nim',$id);
        $query=$this->db->get('mahasiswa');
        return $query->result();
    }

}