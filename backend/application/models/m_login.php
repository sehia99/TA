<?php

class M_login extends CI_Model{
    function cek_login(){
        return $this->db->get('user');
    }
}

?>