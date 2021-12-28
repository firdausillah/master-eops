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
        // print_r($this->Kelas_siswaModel->get()->result()); exit();
        $data = [
            'title' => 'Kelas Siswa',
            'kelas' => $this->KelasModel->get()->result(),
            'jurusan' => $this->JurusanModel->get()->result(),
            'paralel' => $this->ParalelModel->get()->result(),
            'tahun_pelajaran' => $this->Tahun_pelajaranModel->get()->result(),
            'kelas_siswa' => $this->Kelas_siswaModel->get()->result(),
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
            $kelas_siswa = $this->Kelas_siswaModel->findBy(['tb_tahun_pelajaran_siswa.id_tahun_pelajaran' => $_GET['tp'] ])->row_array();
        } else {
            $kelas_siswa = $this->Kelas_siswaModel->get()->result();
        }

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
        $tp = $this->input->post('tp');
        $k = $this->input->post('k');
        $j = $this->input->post('j');
        $p = $this->input->post('p');
        
        $kelas = $this->KelasModel->findBy(['id' => $k])->row();
        $jurusan = $this->JurusanModel->findBy(['id' => $j])->row();
        $paralel = $this->ParalelModel->findBy(['id' => $p])->row();
        // print_r($kelas->kelas); exit();

        foreach ($id_siswa as $key => $val) {
            $data =[
                'id_siswa' => $id_siswa[$key],
                'id_jurusan' => $j,
                'id_kelas' => $k,
                'id_tahun_pelajaran' => $tp,
                'id_wali_kelas' => $k,
                'kelas' => $kelas->kelas,
                'jurusan' => $jurusan->nama_jurusan,
                'paralel' => $paralel->paralel
            ];

            $cek = $this->Kelas_siswaModel->findBy(['id_siswa' => $id_siswa[$key], 'id_tahun_pelajaran' => $tp])->num_rows();

            print_r($cek);

            if ($cek != 0) {
                echo 'update';
            } else {
                echo 'tambah';
            }

        }
        // print_r($data); 
        exit();
    }

    public function save(){
        $data = [
            'kode_jurusan' => $this->input->post('kode_jurusan'),
            'nama_jurusan' => $this->input->post('nama_jurusan')
        ];
        
        if ($this->Kelas_siswaModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/kelas_siswa'));
    }

    // public function edit($id){
    //     $data = [
    //         'title' => 'Edit Kelas Siswa',
    //         'kelas_siswa' => $this->Kelas_siswaModel->findBy(['id' => $id])->row(),
    //         'content' => 'admin/kelas_siswa/edit'
    //     ];

    //     $this->load->view('layout_admin/base', $data);
    // }

    public function update($id){
        $data = [
            'kode_jurusan' => $this->input->post('kode_jurusan'),
            'nama_jurusan' => $this->input->post('nama_jurusan')
        ];
        
        if ($this->Kelas_siswaModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/kelas_siswa'));
    }

    public function delete($id){
        if ($this->Kelas_siswaModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/kelas_siswa');
    }
}
