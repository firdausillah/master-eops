<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('SiswaModel', 'mSiswa');
		$this->load->model('Kelas_siswaModel');
	}


	public function export_siswa_kelas($kode)
	{
		$data = [
			'siswa_m' => $this->mSiswa->get()->result(),
			'siswa' => $this->Kelas_siswaModel->get_siswa_for_excel(['kode' => $kode])->result(),
			'kelas_tapel' => $this->Kelas_siswaModel->get_kelas_tapel(['kode' => $kode])->row()
		];
		// print_r($data['kelas_tapel']->kelas.' '. $data['kelas_tapel']->jurusan.' '. $data['kelas_tapel']->paralel.' '. $data['kelas_tapel']->tahun_awal.'-'. $data['kelas_tapel']->tahun_akhir);
		// exit();


		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();

		$sheet->setCellValue('A1', 'NO');
		$sheet->setCellValue('B1', 'PASSWORD');
		$sheet->setCellValue('C1', 'NAMA');
		$sheet->setCellValue('D1', 'FOTO');
		$sheet->setCellValue('E1', 'JENIS KELAMI');
		$sheet->setCellValue('F1', 'NO INDUK');
		$sheet->setCellValue('G1', 'NISN');
		$sheet->setCellValue('H1', 'NIK SISWA');
		$sheet->setCellValue('I1', 'NO KK');
		$sheet->setCellValue('J1', 'TEMPAT LAHIR SISW');
		$sheet->setCellValue('K1', 'TANGGAL LAHIR SISW');
		$sheet->setCellValue('L1', 'NOAKTE LAHIR');
		$sheet->setCellValue('M1', 'AGAMA');
		$sheet->setCellValue('N1', 'KEWARGANEGARAAN');
		$sheet->setCellValue('O1', 'ALAMAT SISWA');
		$sheet->setCellValue('P1', 'NOMOR H');
		$sheet->setCellValue('Q1', 'RT');
		$sheet->setCellValue('R1', 'RW');
		$sheet->setCellValue('S1', 'DUSUN');
		$sheet->setCellValue('T1', 'DESA');
		$sheet->setCellValue('U1', 'KEC');
		$sheet->setCellValue('V1', 'KAB');
		$sheet->setCellValue('W1', 'KODEPOS');
		$sheet->setCellValue('X1', 'TEMPAT TINGGAL');
		$sheet->setCellValue('Y1', 'MODA TRANSPORTASI');
		$sheet->setCellValue('Z1', 'ANAK KEBERAPA');
		$sheet->setCellValue('AA1', 'NOMOR KIP');
		$sheet->setCellValue('AB1', 'NAMA KIP');
		$sheet->setCellValue('AC1', 'LINTANG');
		$sheet->setCellValue('AD1', 'BUJUR');
		$sheet->setCellValue('AE1', 'NOMOR KKS');
		$sheet->setCellValue('AF1', 'NOMOR KPS PKH');
		$sheet->setCellValue('AG1', 'NAMA AYAH');
		$sheet->setCellValue('AH1', 'NOHP AYAH');
		$sheet->setCellValue('AI1', 'NIK AYAH');
		$sheet->setCellValue('AJ1', 'TGLLAHIR AYAH');
		$sheet->setCellValue('AK1', 'PENDIDIKAN AYAH');
		$sheet->setCellValue('AL1', 'PEKERJAAN AYAH');
		$sheet->setCellValue('AM1', 'PENGHASILAN AYAH');
		$sheet->setCellValue('AN1', 'NAMA IBU');
		$sheet->setCellValue('AO1', 'NOHP IBU');
		$sheet->setCellValue('AP1', 'NIK IBU');
		$sheet->setCellValue('AQ1', 'TGLLAHIR IBU');
		$sheet->setCellValue('AR1', 'PENDIDIKAN IBU');
		$sheet->setCellValue('AS1', 'PEKERJAAN IBU');
		$sheet->setCellValue('AT1', 'PENGHASILAN IBU');
		$sheet->setCellValue('AU1', 'NAMA WALI');
		$sheet->setCellValue('AV1', 'NOHP WALI');
		$sheet->setCellValue('AW1', 'NIK WALI');
		$sheet->setCellValue('AX1', 'TGLLAHIR WALI');
		$sheet->setCellValue('AY1', 'PENDIDIKAN WALI');
		$sheet->setCellValue('AZ1', 'PEKERJAAN WALI');
		$sheet->setCellValue('BA1', 'PENGHASILAN WALI');
		$sheet->setCellValue('BB1', 'TINGGI BADAN');
		$sheet->setCellValue('BC1', 'BERAT BADAN');
		$sheet->setCellValue('BD1', 'JARAK TEMPAT TINGGAL');
		$sheet->setCellValue('BE1', 'WAKTU TEMPUH KESEKOLAH');
		$sheet->setCellValue('BF1', 'JUMLAH SAUDARA KANDUNG');
		$sheet->setCellValue('BG1', 'JENIS PENDAFTARAN');
		$sheet->setCellValue('BH1', 'NIS');
		$sheet->setCellValue('BI1', 'TGL MASUK SEKOLAH');
		$sheet->setCellValue('BJ1', 'ASAL SEKOLAH');
		$sheet->setCellValue('BK1', 'NOMOR PESERTA UJIAN');
		$sheet->setCellValue('BL1', 'NOMOR SERI IJAZAH');
		$sheet->setCellValue('BM1', 'KELUAR KARENA');
		$sheet->setCellValue('BN1', 'TANGGAL KELUAR');
		$sheet->setCellValue('BO1', 'ALASAN KELUAR');

		$baris = 2;
		$no = 1;

		foreach ($data['siswa'] as $siswa) {
			$sheet->setCellValue('A' . $baris, $no++);
			$sheet->setCellValue('B' . $baris, $siswa->password);
			$sheet->setCellValue('C' . $baris, $siswa->nama);
			$sheet->setCellValue('D' . $baris, $siswa->foto);
			$sheet->setCellValue('E' . $baris, $siswa->jk);
			$sheet->setCellValue('F' . $baris, $siswa->no_induk);
			$sheet->setCellValue('G' . $baris, $siswa->nisn);
			$sheet->setCellValue('H' . $baris, $siswa->nik_siswa);
			$sheet->setCellValue('I' . $baris, $siswa->no_kk);
			$sheet->setCellValue('J' . $baris, $siswa->tempatlahir_siswa);
			$sheet->setCellValue('K' . $baris, $siswa->tgllahir_siswa);
			$sheet->setCellValue('L' . $baris, $siswa->noakte_lahir);
			$sheet->setCellValue('M' . $baris, $siswa->agama);
			$sheet->setCellValue('N' . $baris, $siswa->kewarganegaraan);
			$sheet->setCellValue('O' . $baris, $siswa->alamat_siswa);
			$sheet->setCellValue('P' . $baris, $siswa->nohp);
			$sheet->setCellValue('Q' . $baris, $siswa->rt);
			$sheet->setCellValue('R' . $baris, $siswa->rw);
			$sheet->setCellValue('S' . $baris, $siswa->dusun);
			$sheet->setCellValue('T' . $baris, $siswa->desa);
			$sheet->setCellValue('U' . $baris, $siswa->kec);
			$sheet->setCellValue('V' . $baris, $siswa->kab);
			$sheet->setCellValue('W' . $baris, $siswa->kodepos);
			$sheet->setCellValue('X' . $baris, $siswa->tempat_tinggal);
			$sheet->setCellValue('Y' . $baris, $siswa->moda_transportasi);
			$sheet->setCellValue('Z' . $baris, $siswa->anak_keberapa);
			$sheet->setCellValue('AA' . $baris, $siswa->nomor_kip);
			$sheet->setCellValue('AB' . $baris, $siswa->nama_kip);
			$sheet->setCellValue('AC' . $baris, $siswa->lintang);
			$sheet->setCellValue('AD' . $baris, $siswa->bujur);
			$sheet->setCellValue('AE' . $baris, $siswa->nomor_kks);
			$sheet->setCellValue('AF' . $baris, $siswa->nomor_kps_pkh);
			$sheet->setCellValue('AG' . $baris, $siswa->nama_ayah);
			$sheet->setCellValue('AH' . $baris, $siswa->nohp_ayah);
			$sheet->setCellValue('AI' . $baris, $siswa->nik_ayah);
			$sheet->setCellValue('AJ' . $baris, $siswa->tgllahir_ayah);
			$sheet->setCellValue('AK' . $baris, $siswa->pendidikan_ayah);
			$sheet->setCellValue('AL' . $baris, $siswa->pekerjaan_ayah);
			$sheet->setCellValue('AM' . $baris, $siswa->penghasilan_ayah);
			$sheet->setCellValue('AN' . $baris, $siswa->nama_ibu);
			$sheet->setCellValue('AO' . $baris, $siswa->nohp_ibu);
			$sheet->setCellValue('AP' . $baris, $siswa->nik_ibu);
			$sheet->setCellValue('AQ' . $baris, $siswa->tgllahir_ibu);
			$sheet->setCellValue('AR' . $baris, $siswa->pendidikan_ibu);
			$sheet->setCellValue('AS' . $baris, $siswa->pekerjaan_ibu);
			$sheet->setCellValue('AT' . $baris, $siswa->penghasilan_ibu);
			$sheet->setCellValue('AU' . $baris, $siswa->nama_wali);
			$sheet->setCellValue('AV' . $baris, $siswa->nohp_wali);
			$sheet->setCellValue('AW' . $baris, $siswa->nik_wali);
			$sheet->setCellValue('AX' . $baris, $siswa->tgllahir_wali);
			$sheet->setCellValue('AY' . $baris, $siswa->pendidikan_wali);
			$sheet->setCellValue('AZ' . $baris, $siswa->pekerjaan_wali);
			$sheet->setCellValue('BA' . $baris, $siswa->penghasilan_wali);
			$sheet->setCellValue('BB' . $baris, $siswa->tinggi_badan);
			$sheet->setCellValue('BC' . $baris, $siswa->berat_badan);
			$sheet->setCellValue('BD' . $baris, $siswa->jarak_tempat_tinggal);
			$sheet->setCellValue('BE' . $baris, $siswa->waktu_tempuh_kesekolah);
			$sheet->setCellValue('BF' . $baris, $siswa->jumlah_saudara_kandung);
			$sheet->setCellValue('BG' . $baris, $siswa->jenis_pendaftaran);
			$sheet->setCellValue('BH' . $baris, $siswa->nis);
			$sheet->setCellValue('BI' . $baris, $siswa->tgl_masuk_sekolah);
			$sheet->setCellValue('BJ' . $baris, $siswa->asal_sekolah);
			$sheet->setCellValue('BK' . $baris, $siswa->nomor_peserta_ujian);
			$sheet->setCellValue('BL' . $baris, $siswa->nomor_seri_ijazah);
			$sheet->setCellValue('BM' . $baris, $siswa->keluar_karena);
			$sheet->setCellValue('BN' . $baris, $siswa->tanggal_keluar);
			$sheet->setCellValue('BO' . $baris, $siswa->alasan_keluar);

			$baris++;
		}

		$writer = new Xlsx($spreadsheet);
		$filename = 'Siswa Kelas '.$data['kelas_tapel']->kelas . ' ' . $data['kelas_tapel']->jurusan . ' ' . $data['kelas_tapel']->paralel . ' Tahun Pelajaran ' . $data['kelas_tapel']->tahun_awal . '-' . $data['kelas_tapel']->tahun_akhir;

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
		exit();
		redirect($_SERVER['HTTP_REFERER']);
	}
}
