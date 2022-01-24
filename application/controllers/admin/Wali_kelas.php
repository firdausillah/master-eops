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
        $this->load->model('PtkModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth"));
        }
    }

    public function index(){

        $ptk = $this->PtkModel->get()->result();
        $tapel_aktif = $this->Tahun_pelajaranModel->findBy(['status_tahun' => '1'])->row();
        
        if ($_GET) {
            $tapel = $_GET['tp'];
        } else{
            $tapel = $tapel_aktif->id;
        }
        
        foreach ($ptk as $key => $value) {
            $wali = $this->Wali_kelasModel->findBy(['id_ptk' => $value->id, 'id_tahun_pelajaran' => $tapel])->row();

            $wali_kelas[] = (object) [
                'id_ptk' => $value->id,
                'nama' => $value->nama,
                'kelas' => isset($wali->kelas) ? $wali->kelas : '',
                'jurusan' => isset($wali->nama_jurusan) ? $wali->nama_jurusan : '',
                'id_jurusan' => isset($wali->id_jurusan) ? $wali->id_jurusan : '',
                'paralel' => isset($wali->paralel) ? $wali->paralel : ''
            ];
        }

        $data = [
            'title' => 'Kelas PTK',
            'kelas' => $this->KelasModel->get()->result(),
            'jurusan' => $this->JurusanModel->get()->result(),
            'paralel' => $this->ParalelModel->get()->result(),
            'tahun_pelajaran' => $this->Tahun_pelajaranModel->get()->result(),
            'tapel' => $tapel,
            'wali_kelas' => $wali_kelas,
            'content' => 'admin/wali_kelas/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function edit(){
        $cek_wali = $this->Wali_kelasModel->findBy(['id_ptk' => $_GET['ptk'], 'id_tahun_pelajaran' => $_GET['tp']])->row();

        if ($cek_wali != null) {
            $wali_kelas = $cek_wali;
        } else{
            $wali_kelas = $this->PtkModel->findBy(['id' => $_GET['ptk']])->row();
        }

        $data = [
            'title' => 'Update Wali Kelas',
            'kelas' => $this->KelasModel->get()->result(),
            'jurusan' => $this->JurusanModel->get()->result(),
            'paralel' => $this->ParalelModel->get()->result(),
            'tahun_pelajaran' => $this->Tahun_pelajaranModel->findBy(['id' => $_GET['tp']])->row(),
            'wali_kelas' => $wali_kelas,
            'content' => 'admin/wali_kelas/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function save(){
        print_r($_POST);
    }

}
