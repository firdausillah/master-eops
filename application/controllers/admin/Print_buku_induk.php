<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Print_buku_induk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('JurusanModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth"));
        }
    }

    public function index()
    {
        // print('ini bro'); exit();
        $data = [
            'title' => 'Print Buku Induk',
            // 'jurusan' => $this->JurusanModel->get()->result(),
            'content' => 'admin/print_buku_induk/index'
        ];

        $this->load->view('layout_admin/base', $data);
    }
    
}
