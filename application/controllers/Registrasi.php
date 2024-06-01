<?php
    class Registrasi extends CI_Controller{
        
        public function index(){
            $data['title'] = "Formulir Pendaftaran";
            $this->load->view('registrasi',$data);
        }
    }
?>