<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahun_pelajaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tahun_pelajaranModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth"));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Tahun Pelajaran',
            'tahun_pelajaran' => $this->Tahun_pelajaranModel->get()->result(),
            'content' => 'admin/tahun_pelajaran/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function save(){
        $data = [
            'tahun_awal'  => $this->input->post('tahun_awal'),
            'tahun_akhir' => $this->input->post('tahun_akhir'),
            'status_tahun'=> $this->input->post('status_tahun')
        ];
        
        if ($this->Tahun_pelajaranModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/tahun_pelajaran'));
    }

    public function set_status($id){
        $this->Tahun_pelajaranModel->reset_status();

        if ($this->Tahun_pelajaranModel->update(['id' => $id], ['status_tahun' => 1])) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/tahun_pelajaran'));
    }

    public function edit($id){
        // $user = $this->Tahun_pelajaranModel->findBy(['id' => $id])->row();

        // print_r($user->nama); exit();
        $data = [
            'title' => 'Edit User',
            'tahun_pelajaran' => $this->Tahun_pelajaranModel->findBy(['id' => $id])->row(),
            'content' => 'admin/tahun_pelajaran/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function update($id){
        $data = [
            'tahun_awal'  => $this->input->post('tahun_awal'),
            'tahun_akhir' => $this->input->post('tahun_akhir'),
            'status_tahun' => $this->input->post('status_tahun')
        ];
        
        if ($this->Tahun_pelajaranModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/tahun_pelajaran'));
    }

    public function delete($id){
        if ($this->Tahun_pelajaranModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/tahun_pelajaran');
    }
}
