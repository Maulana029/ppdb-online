<?php 
    class M_registrasi extends CI_Model{
        protected $peserta = 'tbl_peserta_baru';
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }
        public function list_data(){
            return $this->db->get_where($this->peserta)->result();
        }
        public function simpan($add){
            $data = array(
                'nama_lengkap'              => $add['nama_lengkap'],
                'nisn'                      => $add['nisn'],
                'nik'                       => $add['nik'],
                'tempat_lahir'              => $add['tempat_lahir'],
                'tanggal_lahir'             => $add['tanggal_lahir'],
                'jenis_kelamin'             => $add['jenis_kelamin'],
                'agama'                     => $add['agama'],
                'alamat'                    => $add['alamat'],
                'rt'                        => $add['rt'],
                'rw'                        => $add['rw'],
                'kelurahan'                 => $add['desa_kelurahan'],
                'kecamatan'                 => $add['kecamatan'],
                'kabupaten'                 => $add['kabupaten'],
                'anak_ke'                   => $add['anak_ke'],
                'jumlah_saudara_kandung'    => $add['jumlah_saudara'],
                'status_keluarga'           => $add['status_keluarga'],
                'asal_sekolah'              => $add['asal_sekolah'],
                'no_wa'                     => $add['no_wa'],
                'jurusan'                   => $add['pilih_jurusan'],
                'gelombang'                 => $add['pilih_gelombang'],
                'nama_ayah'                 => $add['nama_ayah'],
                'nik_ayah'                  => $add['nik_ayah'],
                'tempat_lahir_ayah'         => $add['tempat_lahir_ayah'],
                'tanggal_lahir_ayah'        => $add['tanggal_lahir_ayah'],
                'pendidikan_ayah'           => $add['pendidikan_ayah'],
                'pekerjaan_ayah'            => $add['pekerjaan_ayah'],
                'penghasilan_ayah'          => $add['penghasilan_ayah'],
                'nama_ibu'                  => $add['nama_ibu'],
                'nik_ibu'                   => $add['nik_ibu'],
                'tempat_lahir_ibu'          => $add['tempat_lahir_ibu'],
                'tanggal_lahir_ibu'         => $add['tanggal_lahir_ibu'],
                'pendidikan_ibu'            => $add['pendidikan_ibu'],
                'pekerjaan_ibu'             => $add['pekerjaan_ibu'],
                'penghasilan_ibu'           => $add['penghasilan_ibu'],
                'nama_wali'                 => $add['nama_wali'],
                'nik_wali'                  => $add['nik_wali'],
                'tempat_lahir_wali'         => $add['tempat_lahir_wali'],
                'tanggal_lahir_wali'        => $add['tanggal_lahir_wali'],
                'pendidikan_wali'           => $add['pendidikan_wali'],
                'pekerjaan_wali'            => $add['pekerjaan_wali'],
                'penghasilan_wali'          => $add['penghasilan_wali'],
            );
            $this->db->where('id');
            $this->db->insert($this->peserta,$data);
        }
    }
?>