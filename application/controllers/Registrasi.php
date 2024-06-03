<?php
    class Registrasi extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
            $this->load->model('M_registrasi','i');
        }

        public function index(){
            $data['title'] = "Formulir Pendaftaran";
            $this->load->view('registrasi',$data);
        }

        public function simpan(){
            $this->i->simpan($this->input->post());
            redirect(base_url('registrasi'));
        }
    }
?>