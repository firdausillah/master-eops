<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nama_pembayaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Nama_pembayaranModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth"));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Nama Pembayaran',
            'nama_pembayaran' => $this->Nama_pembayaranModel->get()->result(),
            'content' => 'admin/nama_pembayaran/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function save(){
        $data = [
            'nama_pembayaran' => $this->input->post('nama_pembayaran'),
            'keterangan_pembayaran' => $this->input->post('keterangan_pembayaran')
        ];
        
        if ($this->Nama_pembayaranModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/nama_pembayaran'));
    }

    public function edit($id){
        $data = [
            'title' => 'Edit Nama Pembayaran',
            'nama_pembayaran' => $this->Nama_pembayaranModel->findBy(['id' => $id])->row(),
            'content' => 'admin/nama_pembayaran/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function update($id){
        $data = [
            'nama_pembayaran' => $this->input->post('nama_pembayaran'),
            'keterangan_pembayaran' => $this->input->post('keterangan_pembayaran')
        ];
        
        if ($this->Nama_pembayaranModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/nama_pembayaran'));
    }

    public function delete($id){
        if ($this->Nama_pembayaranModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/nama_pembayaran');
    }
}
