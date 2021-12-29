<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_siswaModel');
        $this->load->model('KelasModel');
        $this->load->model('ParalelModel');
        $this->load->model('JurusanModel');
        $this->load->model('Tahun_pelajaranModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth"));
        }
    }

    public function index(){

        if ($_GET) {
            $data = [
                'id_tahun_pelajaran' => $_GET['tp'],
                'tb_tahun_pelajaran_siswa.id_kelas' => $_GET['k'],
                'tb_tahun_pelajaran_siswa.id_jurusan' => $_GET['j'],
                'tb_tahun_pelajaran_siswa.id_paralel' => $_GET['p']
            ];
            $kelas_siswa = $this->Kelas_siswaModel->findBy($data)->result();
        } else{
            $kelas_siswa = $this->Kelas_siswaModel->get()->result();
        }
        // exit();

        // print_r($this->Kelas_siswaModel->get()->result()); exit();
        $data = [
            'title' => 'Kelas Siswa',
            'kelas' => $this->KelasModel->get()->result(),
            'jurusan' => $this->JurusanModel->get()->result(),
            'paralel' => $this->ParalelModel->get()->result(),
            'tahun_pelajaran' => $this->Tahun_pelajaranModel->get()->result(),
            'kelas_siswa' => $kelas_siswa,
            'content' => 'admin/kelas_siswa/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }
    
    public function tambah(){

        $kelas_siswa = $this->Kelas_siswaModel->get_siswa_non_kelas()->result();
        
        $data = [
            'title' => 'Kelas Siswa',
            'kelas' => $this->KelasModel->get()->result(),
            'jurusan' => $this->JurusanModel->get()->result(),
            'paralel' => $this->ParalelModel->get()->result(),
            'tahun_pelajaran' => $this->Tahun_pelajaranModel->get()->result(),
            'kelas_siswa' => $kelas_siswa,
            'content' => 'admin/kelas_siswa/tambah'
        ];
    
        $this->load->view('layout_admin/base', $data);

    }
    
    public function edit(){

        if ($_GET != null) {
            // $kelas_siswa = $this->Kelas_siswaModel->findBy(['tb_tahun_pelajaran_siswa.id_tahun_pelajaran' => $_GET['tp'] ])->row_array();

            $data = [
                'id_tahun_pelajaran' => $_GET['tp'],
                'tb_tahun_pelajaran_siswa.id_kelas' => $_GET['k'],
                'tb_tahun_pelajaran_siswa.id_jurusan' => $_GET['j'],
                'tb_tahun_pelajaran_siswa.id_paralel' => $_GET['p']
            ];
            $kelas_siswa = $this->Kelas_siswaModel->findBy($data)->result();
        } else {
            $kelas_siswa = $this->Kelas_siswaModel->get()->result();
        }
        // print_r($kelas_siswa->); exit();

        $data = [
            'title' => 'Kelas Siswa',
            'kelas' => $this->KelasModel->get()->result(),
            'jurusan' => $this->JurusanModel->get()->result(),
            'paralel' => $this->ParalelModel->get()->result(),
            'tahun_pelajaran' => $this->Tahun_pelajaranModel->get()->result(),
            'kelas_siswa' => $kelas_siswa,
            'content' => 'admin/kelas_siswa/tambah'
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
        print_r($jurusan->singkatan); exit();

        foreach ($id_siswa as $key => $val) {
            $data =[
                'id_siswa' => $id_siswa[$key],
                'id_jurusan' => $j,
                'id_kelas' => $k,
                'id_paralel' => $p,
                'id_tahun_pelajaran' => $tp->id,
                'id_wali_kelas' => $k,
                'kelas' => $kelas->kelas,
                'jurusan' => $jurusan->singkatan,
                'paralel' => $paralel->paralel
            ];

            $cek = $this->Kelas_siswaModel->findBy(['id_siswa' => $id_siswa[$key], 'id_tahun_pelajaran' => $tp->id])->num_rows();

            // print_r($cek);
            
            if ($cek != 0) {
                $id_tapel_siswa = $this->Kelas_siswaModel->findBy(['id_siswa' => $id_siswa[$key], 'id_tahun_pelajaran' => $tp->id])->row();
                // print_r($id_tapel_siswa->id_tapel_siswa);
                // exit();
                if ($this->Kelas_siswaModel->update(['id' => $id_tapel_siswa->id_tapel_siswa], $data)) {
                    $this->session->set_flashdata('flash', 'Data berhasil diupdate');
                } else {
                    $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
                }
            } else {
                if ($this->Kelas_siswaModel->add($data)) {
                    $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
                } else {
                    $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
                }
            }
        }
        redirect(base_url('admin/kelas_siswa/tambah'));
    }

}
