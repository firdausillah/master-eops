<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('SiswaModel', 'mSiswa');
        $this->load->model('Kelas_siswaModel');
        $this->load->library('M_pdf');
    }


    public function cetak_buku_induk($id_siswa)
    {
        // Buat instance mPDF
        $mpdf = $this->m_pdf->load();

        // Konten HTML yang akan dimasukkan ke dalam PDF
        $data = [
            'title'=>'judul',
            'content'=>'cetak/cetak_buku_induk',
            'siswa' => $this->Kelas_siswaModel->get_siswa_for_cetak_buku_induk(['tb_siswa.id' => $id_siswa])->result(),
            'kelas_tapel' => $this->Kelas_siswaModel->get_kelas_tapel(['tb_siswa.id' => $id_siswa])->row()
        ];
        // print_r($data['siswa']);exit();
        $html = $this->load->view('cetak/base', $data, true);

        // Tulis konten HTML ke dalam PDF
        $mpdf->WriteHTML($html);

        // Unduh PDF
        $mpdf->Output();
    }
}
