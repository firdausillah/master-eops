<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('SiswaModel');
        $this->load->model('Kelas_siswaModel');

        if ($this->session->userdata('role') != 'wali_kelas') {
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

        $this->load->view('layout_wali_kelas/base', $data);
    }

    public function kelas($kode)
    {
        $data = [
            'title' => 'Siswa',
            'siswa' => $this->Kelas_siswaModel->findBy(['kode' => $kode])->result(),
            'content' => 'admin/siswa/table'
        ];

        $this->load->view('layout_wali_kelas/base', $data);
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

    public function show($id){
        $data = [
            'title' => 'Show Siswa',
            'siswa' => $this->SiswaModel->findBy(['id' => $id])->row(),
            'content' => 'wali_kelas/kelas/show-siswa'
        ];

        $this->load->view('wali_kelas/kelas/show-siswa', $data);
    }

    public function save_identitas($id)
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'jk' => $this->input->post('jk'),
            'nisn' => $this->input->post('nisn'),
            'nik_siswa' => $this->input->post('nik_siswa'),
            'no_kk' => $this->input->post('no_kk'),
            'tempatlahir_siswa' => $this->input->post('tempatlahir_siswa'),
            'tgllahir_siswa' => $this->input->post('tgllahir_siswa'),
            'noakte_lahir' => $this->input->post('noakte_lahir'),
            'kewarganegaraan' => $this->input->post('kewarganegaraan'),
            'agama' => $this->input->post('agama'),
            'alamat_siswa' => $this->input->post('alamat_siswa'),
            'rt' => $this->input->post('rt'),
            'nohp' => $this->input->post('nohp'),
            'rw' => $this->input->post('rw'),
            'dusun' => $this->input->post('dusun'),
            'desa' => $this->input->post('desa'),
            'kec' => $this->input->post('kec'),
            'kab' => $this->input->post('kab'),
            'kodepos' => $this->input->post('kodepos'),
            'tempat_tinggal' => $this->input->post('tempat_tinggal'),
            'moda_transportasi' => $this->input->post('moda_transportasi'),
            'anak_keberapa' => $this->input->post('anak_keberapa'),
            'nomor_kip' => $this->input->post('nomor_kip'),
            'nama_kip' => $this->input->post('nama_kip'),
            'lintang' => $this->input->post('lintang'),
            'bujur' => $this->input->post('bujur'),
            'nomor_kks' => $this->input->post('nomor_kks'),
            'nomor_kps_pkh' => $this->input->post('nomor_kps_pkh')
        ];
        if ($this->SiswaModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/siswa/edit/' . $id . '?page=data_identitas'));
    }

    public function save_ayah($id)
    {
        $data = [
            'nama_ayah' => $this->input->post('nama_ayah'),
            'nohp_ayah' => $this->input->post('nohp_ayah'),
            'nik_ayah' => $this->input->post('nik_ayah'),
            'tgllahir_ayah' => $this->input->post('tgllahir_ayah'),
            'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
            'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
            'penghasilan_ayah' => $this->input->post('penghasilan_ayah')
        ];

        if ($this->SiswaModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/siswa/edit/' . $id . '?page=data_ayah'));
    }

    public function save_ibu($id)
    {
        $data = [
            'nama_ibu' => $this->input->post('nama_ibu'),
            'nohp_ibu' => $this->input->post('nohp_ibu'),
            'nik_ibu' => $this->input->post('nik_ibu'),
            'tgllahir_ibu' => $this->input->post('tgllahir_ibu'),
            'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
            'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
            'penghasilan_ibu' => $this->input->post('penghasilan_ibu')
        ];

        if ($this->SiswaModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/siswa/edit/' . $id . '?page=data_ibu'));
    }

    public function save_wali($id)
    {
        $data = [
            'nama_wali' => $this->input->post('nama_wali'),
            'nohp_wali' => $this->input->post('nohp_wali'),
            'nik_wali' => $this->input->post('nik_wali'),
            'tgllahir_wali' => $this->input->post('tgllahir_wali'),
            'pendidikan_wali' => $this->input->post('pendidikan_wali'),
            'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
            'penghasilan_wali' => $this->input->post('penghasilan_wali')
        ];

        if ($this->SiswaModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/siswa/edit/' . $id . '?page=data_wali'));
    }

    public function save_periodik($id)
    {
        $data = [
            'tinggi_badan' => $this->input->post('tinggi_badan'),
            'berat_badan' => $this->input->post('berat_badan'),
            'jarak_tempat_tinggal' => $this->input->post('jarak_tempat_tinggal'),
            'waktu_tempuh_kesekolah' => $this->input->post('waktu_tempuh_kesekolah'),
            'jumlah_saudara_kandung' => $this->input->post('jumlah_saudara_kandung')
        ];

        if ($this->SiswaModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/siswa/edit/' . $id . '?page=data_periodik'));
    }

    public function save_registrasi_pd($id)
    {
        $data = [
            'jenis_pendaftaran' => $this->input->post('jenis_pendaftaran'),
            'nis' => $this->input->post('nis'),
            'tgl_masuk_sekolah' => $this->input->post('tgl_masuk_sekolah'),
            'asal_sekolah' => $this->input->post('asal_sekolah'),
            'nomor_peserta_ujian' => $this->input->post('nomor_peserta_ujian'),
            'nomor_seri_ijazah' => $this->input->post('nomor_seri_ijazah')
        ];

        if ($this->SiswaModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/siswa/edit/' . $id . '?page=registrasi_pd'));
    }

    public function save_pendaftaran_keluar($id)
    {
        $data = [
            'keluar_karena' => $this->input->post('keluar_karena'),
            'tanggal_keluar' => $this->input->post('tanggal_keluar'),
            'alasan_keluar' => $this->input->post('alasan_keluar')
        ];

        if ($this->SiswaModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/siswa/edit/' . $id . '?page=pendaftaran_keluar'));
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
