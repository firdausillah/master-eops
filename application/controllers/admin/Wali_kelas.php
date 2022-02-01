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
                'nama_ptk' => $value->nama_ptk,
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
        // print_r(isset($wali_kelas->kuli) ?? 'satu'); exit();
        
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
        $id_ptk = $this->input->post('id_ptk');
        $tp = $this->input->post('id_tahun_pelajaran');
        $k = $this->input->post('id_kelas');
        $j = $this->input->post('id_jurusan');
        $p = $this->input->post('id_paralel');

        $kelas = $this->KelasModel->findBy(['id' => $k])->row();
        $jurusan = $this->JurusanModel->findBy(['id' => $j])->row();
        $paralel = $this->ParalelModel->findBy(['id' => $p])->row();

        $data = [
            'id_ptk' => $id_ptk,
            'id_kelas' => $k,
            'id_jurusan' => $j,
            'id_paralel' => $p,
            'id_tahun_pelajaran' => $tp,
            'kode' => $k . $j . $p . $tp, //kode wali kelas -> id_kelas.id_jurusan.id_paralel.id_tahun_pelajaran
            'kelas' => $kelas->kelas,
            'jurusan' => $jurusan->singkatan,
            'paralel' => $paralel->paralel
        ];
        
        $cek_wali_ganda = $this->Wali_kelasModel->findBy([
            'kode' => $data['kode']
        ])->row();

        $cek_wali = $this->Wali_kelasModel->findBy([
            'id_ptk' => $id_ptk,
            'id_tahun_pelajaran' => $tp
        ])->num_rows();

        if (isset($cek_wali_ganda)) {
            $this->Wali_kelasModel->delete(['kode' => $cek_wali_ganda->kode]);
        } 

        // exit();

        if ($cek_wali) {
            if ($this->Wali_kelasModel->update(['id_ptk' => $id_ptk, 'id_tahun_pelajaran' => $tp], $data)) {
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

        redirect(base_url('admin/wali_kelas?tp='. $tp));
    }

}
