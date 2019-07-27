<?php //define('BASEPATH') OR exit('No direct script acces allowed');

class M_sadmin extends CI_Model{
    private $_table = "user";

    public $id_user;
    public $username;
    public $nama;
    public $email;
    
    public function rules(){
        return [
            ['field'=>'username',
            'rules'=>'required'],

            ['field'=>'nama',
            'rules'=>'required'],

            ['field'=>'email',
            'rules'=>'required'],

            ['field'=>'password',
            'rules'=>'required']
        ];
    }
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table,["id_user"=>$id])->row();
    }
    
    public function save(){
        $post = $this->input->post();
        $this->username=$post["username"];
        $this->nama=$post["nama"];
        $this->email=$post["email"];
        $this->password=$post["password"];
        $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->id_user=$post["id"];
        $this->username=$post["username"];
        $this->nama=$post["nama"];
        $this->email=$post["email"];
        $this->password=$post["password"];
        $this->db->update($this->_table, $this, array('id_user'=>$post['id']));
    }

    public function delete($id){
        return $this->db->delete($this->table, array("id_user"=>$id));
    }
}