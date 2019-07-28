<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Dasboard extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
     }
 
     //Load Halaman dashboard
     public function index() {
         $this->load->view('admin/dasboard');
     }
     public function pegawe(){
         $this->load->view('pegawe/dasboard');
     }
 }