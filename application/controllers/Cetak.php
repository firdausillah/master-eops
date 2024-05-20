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


    public function cetak_buku_induk($kode)
    {
        // Buat instance mPDF
        $mpdf = $this->m_pdf->load();

        // Konten HTML yang akan dimasukkan ke dalam PDF
        $data = [
            
        ];
        $html = $this->load->view('admin/cetak/cetak_buku_induk', $data, true);

        // Tulis konten HTML ke dalam PDF
        $mpdf->WriteHTML($html);

        // Unduh PDF
        $mpdf->Output();
    }
}
