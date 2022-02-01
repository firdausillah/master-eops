<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ptk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('PtkModel');
        $this->load->model('Riwayat_sertifikasiModel');
        $this->load->model('Riwayat_pendidikanModel');
        // $this->load->model('PtkModel');

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
            'nama_ptk' => $this->input->post('nama_ptk'),
            'nik_ptk' => $this->input->post('nik_ptk'),
            'jenis_kelamin_ptk' => $this->input->post('jenis_kelamin_ptk'),
            'tempat_lahir_ptk' => $this->input->post('tempat_lahir_ptk'),
            'tanggal_lahir_ptk' => $this->input->post('tanggal_lahir_ptk'),
            'nama_ibu_ptk' => $this->input->post('nama_ibu_ptk'),
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
            'title' => 'Edit Data Penelitian Tindakan Kelas',
            'ptk' => $this->PtkModel->findBy(['id' => $id])->row(),
            'riwayat_sertifikasi' => $this->Riwayat_sertifikasiModel->findBy(['id_ptk' => $id])->result(),
            'riwayat_pendidikan' => $this->Riwayat_pendidikanModel->findBy(['id_ptk' => $id])->result(),
            'content' => 'admin/ptk/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function save_identitas($id){
        $data = [
            'nama_ptk' => $this->input->post('nama_ptk'),
            'nik_ptk' => $this->input->post('nik_ptk'),
            'jenis_kelamin_ptk' => $this->input->post('jenis_kelamin_ptk'),
            'tempat_lahir_ptk' => $this->input->post('tempat_lahir_ptk'),
            'tanggal_lahir_ptk' => $this->input->post('tanggal_lahir_ptk'),
            'nama_ibu_ptk' => $this->input->post('nama_ibu_ptk'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        ];
        
        if ($this->PtkModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/ptk/edit/'.$id.'?page=data_identitas'));
    }

    public function save_pribadi($id){
        $data = [
            'alamat_ptk' => $this->input->post('alamat_ptk'),
            'rt_ptk' => $this->input->post('rt_ptk'),
            'rw_ptk' => $this->input->post('rw_ptk'),
            'dusun_ptk' => $this->input->post('dusun_ptk'),
            'desa_ptk' => $this->input->post('desa_ptk'),
            'kecamatan_ptk' => $this->input->post('kecamatan_ptk'),
            'lintang_ptk' => $this->input->post('lintang_ptk'),
            'bujur_ptk' => $this->input->post('bujur_ptk'),
            'kode_pos_ptk' => $this->input->post('kode_pos_ptk'),
            'nomor_hp_ptk' => $this->input->post('nomor_hp_ptk'),
            'agama_ptk' => $this->input->post('agama_ptk'),
            'npwp' => $this->input->post('npwp'),
            'nama_wajib_pajak' => $this->input->post('nama_wajib_pajak'),
            'kewarganegaraan_ptk' => $this->input->post('kewarganegaraan_ptk'),
            'status_perkawinan' => $this->input->post('status_perkawinan'),
            'nama_suami_isteri' => $this->input->post('nama_suami_isteri'),
            'pekerjaan_suami_isteri' => $this->input->post('pekerjaan_suami_isteri')
        ];
        
        if ($this->PtkModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/ptk/edit/'.$id.'?page=data_pribadi'));
    }

    public function save_kepegawaian($id){
        $data = [
            'status_kepegawaian' => $this->input->post('status_kepegawaian'),
            'niy' => $this->input->post('niy'),
            'nuptk' => $this->input->post('nuptk'),
            'jenis_ptk' => $this->input->post('jenis_ptk'),
            'sk_pengangkatan' => $this->input->post('sk_pengangkatan'),
            'tmt_pengangkatan' => $this->input->post('tmt_pengangkatan'),
            'lembaga_pengangkat' => $this->input->post('lembaga_pengangkat')
        ];
        
        if ($this->PtkModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/ptk/edit/'.$id.'?page=data_kepegawaian'));
    }

    public function save_penugasan($id){
        $data = [
            'nomr_surat_tugas' => $this->input->post('nomr_surat_tugas'),
            'tanggal_surat_tugas' => $this->input->post('tanggal_surat_tugas'),
            'tmt_tugas' => $this->input->post('tmt_tugas'),
            'status_sekolah_induk' => $this->input->post('status_sekolah_induk')
        ];
        
        if ($this->PtkModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/ptk/edit/'.$id.'?page=data_penugasan'));
    }

    public function save_inpasing($id){
        $data = [
            'pangkat_golongan' => $this->input->post('pangkat_golongan'),
            'no_sk_inpasing' => $this->input->post('no_sk_inpasing'),
            'tgl_sk_inpasing' => $this->input->post('tgl_sk_inpasing'),
            'tmt_sk_inpasing' => $this->input->post('tmt_sk_inpasing'),
            'angka_kredit' => $this->input->post('angka_kredit'),
            'masa_kerja_tahun' => $this->input->post('masa_kerja_tahun'),
            'masa_kerja_bulan' => $this->input->post('masa_kerja_bulan')
        ];
        
        if ($this->PtkModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/ptk/edit/'.$id.'?page=data_inpasing'));
    }

    // RIWAYAT SERTIFIKASI
    public function save_rs($id){
        $data = [
            'id_ptk' => $id,
            'jenis_sertifikasi' => $this->input->post('jenis_sertifikasi'),
            'nomor_sertifikasi' => $this->input->post('nomor_sertifikasi'),
            'thn_sertifikasi' => $this->input->post('thn_sertifikasi'),
            'bidang_studi_sertifikasi' => $this->input->post('bidang_studi_sertifikasi'),
            'nrg' => $this->input->post('nrg'),
            'nomor_peserta' => $this->input->post('nomor_peserta')
        ];

        if ($this->Riwayat_sertifikasiModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/ptk/edit/' . $id . '?page=riwayat_sertifikasi'));
    }

    public function update_rs($id){
        $id_ptk = $this->Riwayat_sertifikasiModel->findBy(['id' => $id])->row();

        $data = [
            'jenis_sertifikasi' => $this->input->post('jenis_sertifikasi'),
            'nomor_sertifikasi' => $this->input->post('nomor_sertifikasi'),
            'thn_sertifikasi' => $this->input->post('thn_sertifikasi'),
            'bidang_studi_sertifikasi' => $this->input->post('bidang_studi_sertifikasi'),
            'nrg' => $this->input->post('nrg'),
            'nomor_peserta' => $this->input->post('nomor_peserta')
        ];

        if ($this->Riwayat_sertifikasiModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        
        redirect(base_url('admin/ptk/edit/' . $id_ptk->id_ptk . '?page=riwayat_sertifikasi'));
    }
    
    public function delete_rs($id){

        $id_ptk = $this->Riwayat_sertifikasiModel->findBy(['id' => $id])->row();

        if ($this->Riwayat_sertifikasiModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        
        redirect(base_url('admin/ptk/edit/' . $id_ptk->id_ptk . '?page=riwayat_sertifikasi'));
    }
    // END RIWAYAT SERTIFIKASI

    // RIWAYAT PENDIDIKAN
    public function save_rp($id){
        $data = [
            'bidang_studi' => $id,
            'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan'),
            'gelar_akademik' => $this->input->post('gelar_akademik'),
            'satuan_pendidikan' => $this->input->post('satuan_pendidikan'),
            'tahun_masuk' => $this->input->post('tahun_masuk'),
            'tahun_lulus' => $this->input->post('tahun_lulus'),
            'nim' => $this->input->post('nim'),
            'mata_kuliah' => $this->input->post('mata_kuliah'),
            'semester' => $this->input->post('semester'),
            'ipk' => $this->input->post('ipk')
        ];

        if ($this->Riwayat_pendidikanModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/ptk/edit/' . $id . '?page=riwayat_pendidikan'));
    }

    public function update_rp($id){
        $id_ptk = $this->Riwayat_pendidikanModel->findBy(['id' => $id])->row();

        $data = [
            'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan'),
            'gelar_akademik' => $this->input->post('gelar_akademik'),
            'satuan_pendidikan' => $this->input->post('satuan_pendidikan'),
            'tahun_masuk' => $this->input->post('tahun_masuk'),
            'tahun_lulus' => $this->input->post('tahun_lulus'),
            'nim' => $this->input->post('nim'),
            'mata_kuliah' => $this->input->post('mata_kuliah'),
            'semester' => $this->input->post('semester'),
            'ipk' => $this->input->post('ipk')
        ];

        if ($this->Riwayat_pendidikanModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        
        redirect(base_url('admin/ptk/edit/' . $id_ptk->id_ptk . '?page=riwayat_pendidikan'));
    }
    
    public function delete_rp($id){

        $id_ptk = $this->Riwayat_pendidikanModel->findBy(['id' => $id])->row();

        if ($this->Riwayat_pendidikanModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        
        redirect(base_url('admin/ptk/edit/' . $id_ptk->id_ptk . '?page=riwayat_pendidikan'));
    }
    // END RIWAYAT PENDIDIKAN


    public function delete($id){
        if ($this->PtkModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/ptk');
    }
}
