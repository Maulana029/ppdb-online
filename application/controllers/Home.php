<?php 
    class Home extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_registrasi','i');
        }

        public function index(){
            $data['title'] = "Home | Pengumuman Pendaftaran";
            $this->load->view('home',$data);
        }

        public function list_data(){
            $list = $this->i->list_data();
            $draw = $this->input->post('draw');
            $datadb = array();
            $no = 0;
            foreach($list as $data){
                $no++;
                $row = array();
                $row[] = $data->id;
                $row[] = $data->gelombang;
                $row[] = $data->nama_lengkap;
                $row[] = $data->jenis_kelamin;
                $row[] = $data->asal_sekolah;
                $row[] = $data->jurusan;
                $datadb[] = $row;
            }
            $output = array(
                'draw' => intval($draw),
                'data' => $datadb,
            );
            echo json_encode($output);
        }
    }
?>