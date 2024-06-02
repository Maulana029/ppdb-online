<?php 
    class M_registrasi extends CI_Model{
        protected $peserta = 'tbl_peserta_baru';
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }
        public function list_data(){

        }
        public function simpan($add){
            $data = array(
                '' => $add[''],
            );
            $this->db->where('id');
            $this->db->insert($this->peserta,$data);
        }
    }
?>