<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ProfileModel');
        $this->load->model('Kelas_siswaModel');
        $this->load->model('PtkModel');

        if ($this->session->userdata('role') != 'wali_kelas') {
            redirect(base_url("auth"));
        }
    }

    public function index()
    {

        $query_kode = $this->db->query("SELECT kode FROM `tb_wali_kelas` JOIN tb_tahun_pelajaran ON tb_tahun_pelajaran.id=tb_wali_kelas.id_tahun_pelajaran AND tb_tahun_pelajaran.status_tahun = 1 WHERE id_ptk = ". $this->session->userdata('id'))->row();

        $jumlah_siswa_kelas = $this->Kelas_siswaModel->findBy(['kode' => $query_kode->kode])->num_rows();
        $jumlah_siswa_kelas_lk = $this->Kelas_siswaModel->findBy(['kode' => $query_kode->kode, 'jk' => 'Laki-laki'])->num_rows();
        $jumlah_siswa_kelas_pr = $this->Kelas_siswaModel->findBy(['kode' => $query_kode->kode, 'jk' => 'Perempuan'])->num_rows();

        $jumlah_siswa = ['total' => $jumlah_siswa_kelas, 'siswa_lk' => $jumlah_siswa_kelas_lk, 'siswa_pr' => $jumlah_siswa_kelas_pr];

        $profile_ptk = $this->PtkModel->findBy(['id' => $this->session->userdata('id')])->row();
        // print_r($query); 
        // exit();

        $data = [
            'title' => 'Dashboard',
            'profile' => $this->ProfileModel->findBy(['id' => 1])->row(),
            'jumlah_siswa' => $jumlah_siswa,
            'profile_ptk' => $profile_ptk,
            'content' => 'wali_kelas/dashboard'
        ];

        $this->load->view('layout_wali_kelas/base', $data);
    }
}
