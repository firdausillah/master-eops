<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->load->model('GelombangModel', 'mGelombang');
		$this->load->model('AuthModel', 'mAuth');
		$this->load->model('ProfileModel');
		$this->load->model('LogUserModel');

	}

	public function index()
	{
				if ($this->session->userdata() !== null) {
			if ($this->session->userdata('role') == 'admin') {
				$this->session->set_flashdata('flash', 'Anda sudah Login');
				redirect(base_url("admin/dashboard"));
			}
			if ($this->session->userdata('role') == 'wali_kelas') {
				$this->session->set_flashdata('flash', 'Anda sudah Login');
				redirect(base_url("wali_kelas/dashboard"));
			}
			if ($this->session->userdata('role') == 'siswa') {
				$this->session->set_flashdata('flash', 'Anda sudah Login');
				redirect(base_url("siswa/dashboard"));
			}
		} else{
			redirect(base_url("auth"));
		}
		$data = [
			'title' => 'Pilihan Login'
		];

		$this->load->view('dashboard', $data);
	}

	public function admin()
	{
				if ($this->session->userdata() !== null) {
			if ($this->session->userdata('role') == 'admin') {
				$this->session->set_flashdata('flash', 'Anda sudah Login');
				redirect(base_url("admin/dashboard"));
			}
			if ($this->session->userdata('role') == 'wali_kelas') {
				$this->session->set_flashdata('flash', 'Anda sudah Login');
				redirect(base_url("wali_kelas/dashboard"));
			}
			if ($this->session->userdata('role') == 'siswa') {
				$this->session->set_flashdata('flash', 'Anda sudah Login');
				redirect(base_url("siswa/dashboard"));
			}
		} else{
			redirect(base_url("auth"));
		}
		$data = [
			'title' => $this->ProfileModel->findBy(['id' => 1])->row()
		];

		$this->load->view('login', $data);
	}

	public function wali_kelas()
	{
				if ($this->session->userdata() !== null) {
			if ($this->session->userdata('role') == 'admin') {
				$this->session->set_flashdata('flash', 'Anda sudah Login');
				redirect(base_url("admin/dashboard"));
			}
			if ($this->session->userdata('role') == 'wali_kelas') {
				$this->session->set_flashdata('flash', 'Anda sudah Login');
				redirect(base_url("wali_kelas/dashboard"));
			}
			if ($this->session->userdata('role') == 'siswa') {
				$this->session->set_flashdata('flash', 'Anda sudah Login');
				redirect(base_url("siswa/dashboard"));
			}
		} else{
			redirect(base_url("auth"));
		}
		$data = [
			'title' => $this->ProfileModel->findBy(['id' => 1])->row()
		];

		$this->load->view('login', $data);
	}

	public function login_admin()
	{
		// print_r($_POST); exit();
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = [
			'username' => $username,
			'password' => $password
		];

		$cek = $this->mAuth->cekLogin('tb_user', $where)->row();
		$test = $this->mAuth->cekLogin('tb_user', $where)->num_rows();

		if ($test > 0) {
			$data_session = [
				'id'	=> $cek->id,
				'nama'	=> $cek->nama,
				'username'	=> $cek->username,
				'password'	=> $cek->password,
				'role'	=> $cek->role,
				'status'	=> 'login'
			];

			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('flash', 'Anda berhasil Login');

			redirect('admin/dashboard');
		} else {
			$this->session->set_flashdata('error', 'Username atau Password salah!');

			redirect('auth/admin');
		}
	}

	public function login_wali_kelas()
	{
		// print_r($_POST); exit();
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = [
			'username' => $username,
			'password' => $password
		];

		$cek = $this->mAuth->cekLogin('tb_ptk', $where)->row();
		$test = $this->mAuth->cekLogin('tb_ptk', $where)->num_rows();

		// print_r($cek); exit();
		if ($test > 0) {
			$data_session = [
				'id'	=> $cek->id,
				'nama'	=> $cek->nama_ptk,
				'username'	=> $cek->username,
				'password'	=> $cek->password,
				'foto'	=> $cek->foto,
				'role'	=> 'wali_kelas',
				'status'	=> 'login'
			];

			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('flash', 'Anda berhasil Login');

			redirect('wali_kelas/dashboard');
		} else {
			$this->session->set_flashdata('error', 'Username atau Password salah!');

			redirect('auth/wali_kelas');
		}
	}

	public function logout()
	{
		
		if ($this->session->userdata() !== null) {
			$this->session->sess_destroy();
		}
		$this->session->set_flashdata('success', 'Berhasil Logout');
		redirect(base_url('auth'));
	}
}
