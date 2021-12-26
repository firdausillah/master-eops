<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('KelasModel');
        $this->load->model('ParalelModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth"));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Kelas',
            'kelas' => $this->KelasModel->get()->result(),
            'paralel' => $this->ParalelModel->get()->result(),
            'content' => 'admin/kelas/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function save(){
        $data = [
            'kelas' => $this->input->post('kelas')
        ];
        
        if ($this->KelasModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/kelas'));
    }

    public function edit($id){
        $data = [
            'title' => 'Edit Kelas',
            'kelas' => $this->KelasModel->findBy(['id' => $id])->row(),
            'content' => 'admin/kelas/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function update($id){
        $data = [
            'kelas' => $this->input->post('kelas')
        ];
        
        if ($this->KelasModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/kelas'));
    }

    public function delete($id){
        if ($this->KelasModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/kelas');
    }


    public function saveParalel()
    {
        $data = [
            'paralel' => $this->input->post('paralel')
        ];

        if ($this->ParalelModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/kelas'));
    }

    public function editParalel($id)
    {
        $data = [
            'title' => 'Edit Paralel',
            'paralel' => $this->ParalelModel->findBy(['id' => $id])->row(),
            'content' => 'admin/kelas/editParalel'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function updateParalel($id)
    {
        $data = [
            'paralel' => $this->input->post('paralel')
        ];

        if ($this->ParalelModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/kelas'));
    }

    public function deleteParalel($id)
    {
        if ($this->ParalelModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/kelas');
    }

}
