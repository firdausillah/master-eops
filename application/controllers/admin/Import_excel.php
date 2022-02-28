<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Import_excel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('SiswaModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth"));
        }
    }

    public function save()
    {
        $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        if (isset($_FILES['excel']['name']) && in_array($_FILES['excel']['type'], $file_mimes)) {
            $arr_file = explode('.', $_FILES['excel']['name']);
            $extension = end($arr_file);
            if ('csv' == $extension
            ) {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }
            $spreadsheet = $reader->load($_FILES['excel']['tmp_name']);
            $sheetData = $spreadsheet->getActiveSheet()->toArray();
            // echo "<pre>";
            // print_r($sheetData);
            
            foreach ($sheetData as $key => $value) {
                $data = [
                    'kode_pendaftaran' => $value['1'],
                    'nama' => $value['2'],
                    'jk' => $value['3'],
                    'nisn' => $value['4'],
                    'nik_siswa' => $value['5'],
                    'no_kk' => $value['6'],
                    'tempatlahir_siswa' => $value['7'],
                    'tgllahir_siswa' => $value['8'],
                    'noakte_lahir' => $value['9'],
                    'agama' => $value['10'],
                    'kewarganegaraan' => $value['11'],
                    'alamat_siswa' => $value['12'],
                    'nohp' => $value['13'],
                    'password' => $value['13'],
                    'rt' => $value['14'],
                    'rw' => $value['15'],
                    'dusun' => $value['16'],
                    'desa' => $value['17'],
                    'kec' => $value['18'],
                    'kab' => $value['19'],
                    'kodepos' => $value['20'],
                    'tempat_tinggal' => $value['21'],
                    'moda_transportasi' => $value['22'],
                    'anak_keberapa' => $value['23'],
                    'nama_ayah' => $value['25'],
                    'nohp_ayah' => $value['26'],
                    'nik_ayah' => $value['27'],
                    'tgllahir_ayah' => $value['28'],
                    'pendidikan_ayah' => $value['29'],
                    'pekerjaan_ayah' => $value['30'],
                    'penghasilan_ayah' => $value['31'],
                    'nama_ibu' => $value['32'],
                    'nohp_ibu' => $value['33'],
                    'nik_ibu' => $value['34'],
                    'tgllahir_ibu' => $value['35'],
                    'pendidikan_ibu' => $value['36'],
                    'pekerjaan_ibu' => $value['37'],
                    'penghasilan_ibu' => $value['38'],
                    'nama_wali' => $value['39'],
                    'nohp_wali' => $value['40'],
                    'nik_wali' => $value['41'],
                    'tgllahir_wali' => $value['42'],
                    'pendidikan_wali' => $value['43'],
                    'pekerjaan_wali' => $value['44'],
                    'penghasilan_wali' => $value['45'],
                    'tinggi_badan' => $value['46'],
                    'berat_badan' => $value['47'],
                    'asal_sekolah' => $value['55']
                ];
                // echo $key;
                if ($key >= 1) {

                    $cek = $this->SiswaModel->findBy(['nik_siswa' => $data['nik_siswa']])->row();
                    if ($cek == null) {
                        if ($this->SiswaModel->add($data)) {
                            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
                        } else {
                            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
                        }
                    } else {
                        if ($this->SiswaModel->update(['nik_siswa' => $data['nik_siswa']], $data)) {
                            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
                        } else {
                            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
                        }
                    }
                    // echo "<pre>";
                    // print_r($cek);
                }

            }
            redirect(base_url('admin/siswa'));
        }
    }
}
