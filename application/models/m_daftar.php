<?php
class M_daftar extends CI_Model{
    function daftar(){
        return $this->db->get('user');
    }
}