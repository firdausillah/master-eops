<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('SiswaModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth"));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Siswa',
            'siswa' => $this->SiswaModel->get()->result(),
            'content' => 'admin/siswa/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function save(){
        $data = [
            'nama' => $this->input->post('nama'),
            'nik_siswa' => $this->input->post('nik_siswa'),
            'jk' => $this->input->post('jk'),
            'tempatlahir_siswa' => $this->input->post('tempatlahir_siswa'),
            'tgllahir_siswa' => $this->input->post('tgllahir_siswa'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'nohp' => $this->input->post('nohp'),
            'password' => $this->input->post('password')
        ];
        
        if ($this->SiswaModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/siswa'));
    }

    public function edit($id){
        $data = [
            'title' => 'Edit Siswa',
            'siswa' => $this->SiswaModel->findBy(['id' => $id])->row(),
            'content' => 'admin/siswa/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function update($id){
        $data = [
            'nama' => $this->input->post('nama'),
            'nik_siswa' => $this->input->post('nik_siswa'),
            'jk' => $this->input->post('jk'),
            'tempatlahir_siswa' => $this->input->post('tempatlahir_siswa'),
            'tgllahir_siswa' => $this->input->post('tgllahir_siswa'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'nohp' => $this->input->post('nohp'),
            'password' => $this->input->post('password')
        ];
        
        if ($this->SiswaModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/siswa'));
    }

    public function delete($id){
        if ($this->SiswaModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/siswa');
    }
}
