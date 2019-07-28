<?php 
//define('BASEPATH') OR exit('No direct script access allowed');

class Pegawe extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("pegawe/m_sadmin");
        $this->load->library('form_validation');

    }

    public function index(){
        $data["user"]=$this->m_sadmin->getAll();
        $this->load->view("admin/pegawe/pegawe",$data);
    }

    public function add(){
        $user=$this->m_sadmin;
        $validation=$this->form_validation;
        $validation->set_rules($user->rules());

        if($validation->run()){
            $user->save();
            $this->session->set_flashdata('success', 'Berhasil Disimpan');
        }
        $this->load->view("admin/pegawe/tambah");
    }

    public function edit($id=null){
        if(!isset($id)) redirect('admin/pegawe');

        $user=$this->m_sadmin;
        $validation=$this->form_validation;
        $validation->set_rules($user->rules());

        if($validation->run()){
            $user->update();
            $this->session->set_flashdata('success', 'Berhasil Disimpan');
        }

        $data["user"]=$user->getById($id);
        //id(!$data["user"]) show_404();

        $this->load->view("admin/pegawe/edit", $data);
    }

    public function delete($id=null){
        if(!isset($id)) show_404();

        if($this->m_sadmin->delete($id)){
            redirect(site_url('sadmin/pegawe'));
        }
    }
}