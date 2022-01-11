<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wali_kelas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Wali_kelasModel');
        $this->load->model('KelasModel');
        $this->load->model('ParalelModel');
        $this->load->model('JurusanModel');
        $this->load->model('Tahun_pelajaranModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth"));
        }
    }

    public function index(){

        // print_r($this->Wali_kelasModel->get()->result()); exit();

        if ($_GET) {
            // $kelas = $_GET['k'] == 'all' ? $_GET['k'] : 
            $data = [
                'id_tahun_pelajaran' => $_GET['tp']
                // 'tb_wali_kelas.id_kelas' => $_GET['k'],
                // 'tb_wali_kelas.id_jurusan' => $_GET['j'],
                // 'tb_wali_kelas.id_paralel' => $_GET['p']
            ];
            $wali_kelas = $this->Wali_kelasModel->findBy($data)->result();
        } else{
            $wali_kelas = $this->Wali_kelasModel->get()->result();
        }
        // exit();

        // print_r($this->Wali_kelasModel->get()->result()); exit();
        $data = [
            'title' => 'Kelas Siswa',
            'kelas' => $this->KelasModel->get()->result(),
            'jurusan' => $this->JurusanModel->get()->result(),
            'paralel' => $this->ParalelModel->get()->result(),
            'tahun_pelajaran' => $this->Tahun_pelajaranModel->get()->result(),
            'wali_kelas' => $wali_kelas,
            'content' => 'admin/wali_kelas/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }
    
    public function tambah(){

        $wali_kelas = $this->Wali_kelasModel->get_ptk_non_kelas()->result();
        // print_r($wali_kelas); exit();
        
        $data = [
            'title' => 'Masukan Siswa Kedalam Kelas',
            'kelas' => $this->KelasModel->get()->result(),
            'jurusan' => $this->JurusanModel->get()->result(),
            'paralel' => $this->ParalelModel->get()->result(),
            'tahun_pelajaran' => $this->Tahun_pelajaranModel->get()->result(),
            'wali_kelas' => $wali_kelas,
            'content' => 'admin/wali_kelas/tambah'
        ];
    
        $this->load->view('layout_admin/base', $data);

    }
    
    public function edit(){

        if ($_GET != null) {
            // $wali_kelas = $this->Wali_kelasModel->findBy(['tb_wali_kelas.id_tahun_pelajaran' => $_GET['tp'] ])->row_array();

            $data = [
                'id_tahun_pelajaran' => $_GET['tp']
                // 'tb_wali_kelas.id_kelas' => $_GET['k'],
                // 'tb_wali_kelas.id_jurusan' => $_GET['j'],
                // 'tb_wali_kelas.id_paralel' => $_GET['p']
            ];
            $wali_kelas = $this->Wali_kelasModel->findBy($data)->result();
        } else {
            $wali_kelas = $this->Wali_kelasModel->get()->result();
        }
        // print_r($wali_kelas->); exit();

        $data = [
            'title' => 'Update Kelas Siswa',
            'kelas' => $this->KelasModel->get()->result(),
            'jurusan' => $this->JurusanModel->get()->result(),
            'paralel' => $this->ParalelModel->get()->result(),
            'tahun_pelajaran' => $this->Tahun_pelajaranModel->get()->result(),
            'wali_kelas' => $wali_kelas,
            'content' => 'admin/wali_kelas/tambah'
        ];
    
        $this->load->view('layout_admin/base', $data);

    }

    public function update_kelas(){
        
        $id_siswa = $this->input->post('id_siswa');
        $tp = $this->Tahun_pelajaranModel->findBy(['status_tahun' => '1'])->row();
        $k = $this->input->post('k');
        $j = $this->input->post('j');
        $p = $this->input->post('p');
        // $id_tapel_siswa = $this->input->post('id_tapel_siswa');
        
        $kelas = $this->KelasModel->findBy(['id' => $k])->row();
        $jurusan = $this->JurusanModel->findBy(['id' => $j])->row();
        $paralel = $this->ParalelModel->findBy(['id' => $p])->row();
        // print_r($jurusan->singkatan); exit();

        foreach ($id_siswa as $key => $val) {
            $data =[
                'id_siswa' => $id_siswa[$key],
                'id_jurusan' => $j,
                'id_kelas' => $k,
                'id_paralel' => $p,
                'id_tahun_pelajaran' => $tp->id,
                'kode' => $j.$p.$k.$tp->id,
                'kelas' => $kelas->kelas,
                'jurusan' => $jurusan->singkatan,
                'paralel' => $paralel->paralel
            ];

            $cek = $this->Wali_kelasModel->findBy(['id_siswa' => $id_siswa[$key], 'id_tahun_pelajaran' => $tp->id])->num_rows();

            // print_r($cek);
            
            if ($cek != 0) {
                $id_tapel_siswa = $this->Wali_kelasModel->findBy(['id_siswa' => $id_siswa[$key], 'id_tahun_pelajaran' => $tp->id])->row();
                // print_r($id_tapel_siswa->id_tapel_siswa);
                // exit();
                if ($this->Wali_kelasModel->update(['id' => $id_tapel_siswa->id_tapel_siswa], $data)) {
                    $this->session->set_flashdata('flash', 'Data berhasil diupdate');
                } else {
                    $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
                }
            } else {
                if ($this->Wali_kelasModel->add($data)) {
                    $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
                } else {
                    $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
                }
            }
        }
        redirect(base_url('admin/wali_kelas/tambah'));
    }

}
