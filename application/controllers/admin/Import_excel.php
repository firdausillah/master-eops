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
        $this->load->model('PtkModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth"));
        }
    }

    public function import_data_siswa()
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

    public function import_data_ptk()
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
            // exit();
            
            foreach ($sheetData as $key => $value) {
                $data = [
                    'nama_ptk' => $value['1'],
                    'nik_ptk' => $value['2'],
                    'jenis_kelamin_ptk' => $value['3'],
                    'tempat_lahir_ptk' => $value['4'],
                    'tanggal_lahir_ptk' => $value['5'],
                    'nama_ibu_ptk' => $value['6'],
                    'username' => $value['7'],
                    'password' => $value['8'],
                    'alamat_ptk' => $value['9'],
                    'rt_ptk' => $value['10'],
                    'rw_ptk' => $value['11'],
                    'dusun_ptk' => $value['12'],
                    'desa_ptk' => $value['13'],
                    'kecamatan_ptk' => $value['13'],
                    'kode_pos_ptk' => $value['14'],
                    'nomor_hp_ptk' => $value['15'],
                    'agama_ptk' => $value['16'],
                    'nama_wajib_pajak' => $value['17'],
                    'kewarganegaraan_ptk' => $value['18'],
                    'status_perkawinan' => $value['19'],
                    'nama_suami_isteri' => $value['20'],
                    'pekerjaan_suami_isteri' => $value['21'],
                    'status_kepegawaian' => $value['22'],
                    'niy' => $value['23'],
                    'nuptk' => $value['25'],
                    'jenis_ptk' => $value['26'],
                    'sk_pengangkatan' => $value['27'],
                    'tmt_pengangkatan' => $value['28'],
                    'lembaga_pengangkat' => $value['29'],
                    'nomr_surat_tugas' => $value['30'],
                    'tanggal_surat_tugas' => $value['31'],
                    'tmt_tugas' => $value['32'],
                    'status_sekolah_induk' => $value['33'],
                    'pangkat_golongan' => $value['34'],
                    'no_sk_inpasing' => $value['35'],
                    'tgl_sk_inpasing' => $value['36'],
                    'tmt_sk_inpasing' => $value['37'],
                    'angka_kredit' => $value['38'],
                    'masa_kerja_tahun' => $value['39'],
                    'masa_kerja_bulan' => $value['40']
                ];
                // echo $key;
                if ($key >= 1) {

                    $cek = $this->PtkModel->findBy(['nik_ptk' => $data['nik_ptk']])->row();
                    if ($cek == null) {
                        if ($this->PtkModel->add($data)) {
                            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
                        } else {
                            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
                        }
                    } else {
                        if ($this->PtkModel->update(['nik_ptk' => $data['nik_ptk']], $data)) {
                            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
                        } else {
                            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
                        }
                    }
                    // echo "<pre>";
                    // print_r($cek);
                }

            }
            redirect(base_url('admin/ptk'));
        }
    }
}
