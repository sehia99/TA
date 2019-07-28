<?php //define('BASEPATH') OR exit('No direct script acces allowed');

class M_sadmin extends CI_Model{
    private $_table = "saldo";

    public $id_saldo;
    public $id_user;
    public $saldo;
    
    public function rules(){
        return [
            ['field'=>'username',
            'rules'=>'required'],

            ['field'=>'nama',
            'rules'=>'required'],

            ['field'=>'alamat',
            'rules'=>'required'],

            ['field'=>'no_hp',
            'rules'=>'required'],

            ['field'=>'email',
            'rules'=>'required'],

            ['field'=>'password',
            'rules'=>'required']
        ];
    }
    public function getAll(){
        return $this->db->get_where($this->_table, ["levela"=>"2"])->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table,["id_user"=>$id])->row();
    }
    
    public function save(){
        $post = $this->input->post();
        $this->username=$post["username"];
        $this->nama=$post["nama"];
        //$this->photo=$photo;
        $this->alamat=$post["alamat"];
        $this->no_hp=$post["no_hp"];
        $this->email=$post["email"];
        $this->password=md5($post["password"]);
        //$this->levela=$levela;
        $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->id_user=$post["id"];
        $this->username=$post["username"];
        $this->nama=$post["nama"];
        $this->alamat=$post["alamat"];
        $this->no_hp=$post["no_hp"];
        $this->email=$post["email"];
        $this->password=$post["password"];
        $this->db->update($this->_table, $this, array('id_user'=>$post['id']));
    }

    public function delete($id){
        return $this->db->delete($this->_table, array("id_user"=>$id));
    }
}