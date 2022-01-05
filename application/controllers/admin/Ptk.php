<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ptk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('PtkModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth"));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Penelitian Tindakan Kelas',
            'ptk' => $this->PtkModel->get()->result(),
            'content' => 'admin/ptk/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function save(){
        $data = [
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        ];
        
        if ($this->PtkModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/ptk'));
    }

    public function edit($id){
        $data = [
            'title' => 'Edit Penelitian Tindakan Kelas',
            'ptk' => $this->PtkModel->findBy(['id' => $id])->row(),
            'content' => 'admin/ptk/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function update($id){
        $data = [
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        ];
        
        if ($this->PtkModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/ptk'));
    }

    public function delete($id){
        if ($this->PtkModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/ptk');
    }
}
