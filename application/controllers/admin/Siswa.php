<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('SiswaModel');
        $this->load->model('Kelas_siswaModel');
        $this->load->model('PrestasiModel');
        $this->load->model('BeasiswaModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth"));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Siswa',
            'siswa' => $this->Kelas_siswaModel->get()->result(),
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
            'prestasi' => $this->PrestasiModel->findBy(['id_siswa' => $id])->result(),
            'beasiswa' => $this->BeasiswaModel->findBy(['id_siswa' => $id])->result(),
            'content' => 'admin/siswa/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function save_identitas($id)
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'jk' => $this->input->post('jk'),
            'nik_siswa' => $this->input->post('nik_siswa'),
            'password' => $this->input->post('password'),
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
            'asal_sekolah_pd_masuk' => $this->input->post('asal_sekolah_pd_masuk'),
            'nomor_peserta_ujian' => $this->input->post('nomor_peserta_ujian'),
            'no_induk' => $this->input->post('no_induk'),
            'nisn' => $this->input->post('nisn'),
            'tanggal_ijasah' => $this->input->post('tanggal_ijasah'),
            'nomor_seri_ijazah' => $this->input->post('nomor_seri_ijazah')
        ];

        if ($this->SiswaModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/siswa/edit/' . $id . '?page=registrasi_pd'));
    }

    public function save_registrasi_pd_keluar($id)
    {
        $data = [
            'keluar_karena' => $this->input->post('keluar_karena'),
            'tanggal_keluar' => $this->input->post('tanggal_keluar'),
            'alasan_keluar' => $this->input->post('alasan_keluar'),
            'sekolah_tujuan' => $this->input->post('sekolah_tujuan'),
            'dari_kelas' => $this->input->post('dari_kelas'),
            'alamat_sekolah_tujuan' => $this->input->post('alamat_sekolah_tujuan'),
            'npsn' => $this->input->post('npsn'),
            'tahun_tamat' => $this->input->post('tahun_tamat'),
            'nomor_seri_ijasah' => $this->input->post('nomor_seri_ijasah'),
            'tanggal_ijasah_pd_keluar' => $this->input->post('tanggal_ijasah_pd_keluar'),
            'wirausaha' => $this->input->post('wirausaha'),
            'bekerja_di' => $this->input->post('bekerja_di'),
            'melanjutkan_ke' => $this->input->post('melanjutkan_ke')
        ];

        if ($this->SiswaModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/siswa/edit/' . $id . '?page=registrasi_pd_keluar'));
    }

    public function delete($id){
        if ($this->SiswaModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/siswa');
    }

    // RIWAYAT BEASISWA
    public function save_beasiswa($id)
    {
        $data = [
            'id_siswa' => $id,
            'jenis_beasiswa' => $this->input->post('jenis_beasiswa'),
            'keterangan' => $this->input->post('keterangan'),
            'tanggal_mulai' => $this->input->post('tanggal_mulai'),
            'tanggal_selesai' => $this->input->post('tanggal_selesai')
        ];

        if ($this->BeasiswaModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/siswa/edit/' . $id . '?page=beasiswa'));
    }

    public function update_beasiswa($id)
    {
        $id_siswa = $this->BeasiswaModel->findBy(['id' => $id])->row();

        $data = [
            'jenis_beasiswa' => $this->input->post('jenis_beasiswa'),
            'keterangan' => $this->input->post('keterangan'),
            'tanggal_mulai' => $this->input->post('tanggal_mulai'),
            'tanggal_selesai' => $this->input->post('tanggal_selesai')
        ];

        if ($this->BeasiswaModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/siswa/edit/' . $id_siswa->id_siswa . '?page=beasiswa'));
    }

    public function delete_beasiswa($id)
    {

        $id_siswa = $this->BeasiswaModel->findBy(['id' => $id])->row();

        if ($this->BeasiswaModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/siswa/edit/' . $id_siswa->id_siswa . '?page=beasiswa'));
    }
    // END RIWAYAT BEASISWA

    // RIWAYAT PRESTASI
    public function save_prestasi($id)
    {
        $data = [
            'id_siswa' => $id,
            'jenis_prestasi' => $this->input->post('jenis_prestasi'),
            'tingkat_prestasi' => $this->input->post('tingkat_prestasi'),
            'nama_prestasi' => $this->input->post('nama_prestasi'),
            'tahun' => $this->input->post('tahun'),
            'penyelenggara' => $this->input->post('penyelenggara'),
            'peringkat' => $this->input->post('peringkat')
        ];

        if ($this->PrestasiModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/siswa/edit/' . $id . '?page=prestasi'));
    }

    public function update_prestasi($id)
    {
        $id_siswa = $this->PrestasiModel->findBy(['id' => $id])->row();

        $data = [
            'jenis_prestasi' => $this->input->post('jenis_prestasi'),
            'tingkat_prestasi' => $this->input->post('tingkat_prestasi'),
            'nama_prestasi' => $this->input->post('nama_prestasi'),
            'tahun' => $this->input->post('tahun'),
            'penyelenggara' => $this->input->post('penyelenggara'),
            'peringkat' => $this->input->post('peringkat')
        ];

        if ($this->PrestasiModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/siswa/edit/' . $id_siswa->id_siswa . '?page=prestasi'));
    }

    public function delete_prestasi($id)
    {

        $id_siswa = $this->PrestasiModel->findBy(['id' => $id])->row();

        if ($this->PrestasiModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/siswa/edit/' . $id_siswa->id_siswa . '?page=prestasi'));
    }
    // END RIWAYAT PRESTASI
}
