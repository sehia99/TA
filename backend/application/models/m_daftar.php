<?php
class M_daftar extends CI_Model{
    function daftar($data){
        return $this->db->insert('user',$data);
    }
}