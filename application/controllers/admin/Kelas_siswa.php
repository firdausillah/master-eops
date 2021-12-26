<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_siswaModel');
        $this->load->model('KelasModel');
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
            'tahun_pelajaran' => $this->Tahun_pelajaranModel->get()->result(),
            'kelas_siswa' => $this->Kelas_siswaModel->get()->result(),
            'content' => 'admin/kelas_siswa/table'
        ];

        $this->load->view('layout_admin/base', $data);
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

    public function edit($id){
        $data = [
            'title' => 'Edit Kelas Siswa',
            'kelas_siswa' => $this->Kelas_siswaModel->findBy(['id' => $id])->row(),
            'content' => 'admin/kelas_siswa/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

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
