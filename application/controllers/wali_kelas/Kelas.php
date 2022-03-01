<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('SiswaModel');
        $this->load->model('Kelas_siswaModel');
        $this->load->model('Wali_kelasModel');
        $this->load->model('KelasModel');
        $this->load->model('JurusanModel');
        $this->load->model('ParalelModel');
        $this->load->model('Tahun_pelajaranModel');

        if ($this->session->userdata('role') != 'wali_kelas') {
            redirect(base_url("auth"));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Kelas',
            'kelas' => $this->Wali_kelasModel->findBy(['id_ptk' => $this->session->userdata('id')])->result(),
            'siswa' => $this->Kelas_siswaModel->get()->result(),
            'content' => 'wali_kelas/kelas/table'
        ];
        
        $this->load->view('layout_wali_kelas/base', $data);
    }

    public function siswa($kode){

        $id = str_split($kode);

        $kelas = $this->KelasModel->findBy(['id' => $id['0']])->row();
        $jurusan = $this->JurusanModel->findBy(['id' => $id['1']])->row();
        $paralel = $this->ParalelModel->findBy(['id' => $id['2']])->row();
        $tahun_pelajaran = $this->Tahun_pelajaranModel->findBy(['id' => $id['3']])->row();

        $get_kelas = $this->Wali_kelasModel->findBy(['kode' => $kode])->row();
        
        $result_get_kelas = $get_kelas->kelas . ' ' . $get_kelas->nama_jurusan . ' ' . $get_kelas->paralel. ' Tahun Pelajaran ' . $get_kelas->tahun_awal . '/' . $get_kelas->tahun_akhir;
        // $result_get_kelas = $kelas->kelas . ' ' . $jurusan->nama_jurusan . ' ' . $paralel->paralel. ' Tahun Pelajaran ' . $tahun_pelajaran->tahun_awal . '/' . $tahun_pelajaran->tahun_akhir;

        // print_r($result_get_kelas);
        // exit();
        $data = [
            'title' => 'Siswa Kelas '. $result_get_kelas,
            'siswa' => $this->Kelas_siswaModel->findBy(['kode' => $kode])->result(),
            'content' => 'wali_kelas/kelas/table-siswa'
        ];

        $this->load->view('layout_wali_kelas/base', $data);
    }
}
