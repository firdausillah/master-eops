<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('PtkModel');
        $this->load->model('Riwayat_sertifikasiModel');
        $this->load->model('Riwayat_pendidikanModel');
        $this->load->model('Tugas_tambahanModel');

        if ($this->session->userdata('role') != 'wali_kelas') {
            redirect(base_url("auth"));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Edit Data Pegawai Tindakan Kependidikan',
            'ptk' => $this->PtkModel->findBy(['id' => $this->session->userdata('id')])->row(),
            'riwayat_sertifikasi' => $this->Riwayat_sertifikasiModel->findBy(['id_ptk' => $this->session->userdata('id')])->result(),
            'riwayat_pendidikan' => $this->Riwayat_pendidikanModel->findBy(['id_ptk' => $this->session->userdata('id')])->result(),
            'tugas_tambahan' => $this->Tugas_tambahanModel->findBy(['id_ptk' => $this->session->userdata('id')])->result(),
            'content' => 'wali_kelas/profile/edit'
        ];

        $this->load->view('layout_wali_kelas/base', $data); 
    }

    public function save_pribadi($id)
    {
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

        redirect(base_url('wali_kelas/profile?page=data_pribadi'));
    }

    public function save_foto($id)
    {
        $this->load->helper('slug');

        $nama = $this->input->post('nama');
        $foto = $this->input->post('gambar');

        // Output: 54esmdr0qf
        $kode = $id .'-'. slugify($nama);
        // echo $kode; exit();

        if (!empty($_FILES['foto']['name'])) { // $_FILES untuk mengambil data foto
            $cfg = [
                'upload_path' => './uploads/img/ptk',
                'allowed_types' => 'png|jpg|gif|jpeg',
                'file_name' => $kode,
                // 'overwrite' => TRUE,
                'overwrite' => (empty($foto) ? FALSE : TRUE),
                'max_size' => '2028',
            ];
            if (!empty($foto)) $cfg['file_name'] = $kode;
            // print_r($cfg); exit();
            $this->load->library('upload', $cfg);

            if ($this->upload->do_upload('foto')) $foto = $this->upload->data('file_name');
            else exit('Error : ' . $this->upload->display_errors());
        }
        // print_r($foto); exit();

        if ($this->PtkModel->update(['id' => $id], ['foto' => $foto])) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('wali_kelas/profile?page=foto'));
    }

    public function save_inpasing($id)
    {
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

        redirect(base_url('wali_kelas/profile?page=data_inpasing'));
    }

    // RIWAYAT PENDIDIKAN
    public function save_rp($id)
    {
        $data = [
            'id_ptk' => $id,
            'bidang_studi' => $this->input->post('bidang_studi'),
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

        redirect(base_url('wali_kelas/profile?page=riwayat_pendidikan'));
    }

    public function update_rp($id)
    {
        $id_ptk = $this->Riwayat_pendidikanModel->findBy(['id' => $id])->row();

        $data = [
            'bidang_studi' => $this->input->post('bidang_studi'),
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

        redirect(base_url('wali_kelas/profile?page=riwayat_pendidikan'));
    }

    public function delete_rp($id)
    {

        $id_ptk = $this->Riwayat_pendidikanModel->findBy(['id' => $id])->row();

        if ($this->Riwayat_pendidikanModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('wali_kelas/profile?page=riwayat_pendidikan'));
    }
    // END RIWAYAT PENDIDIKAN
}
